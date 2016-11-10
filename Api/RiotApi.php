<?php

namespace Keiwen\RiotApi\Api;



use Keiwen\RiotApi\Constants\Region;
use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Exceptions\ApiNotFoundException;
use Keiwen\RiotApi\Services\ServiceRegistry;
use Keiwen\Utils\Analyse\ArrayAnalyser;
use Keiwen\Utils\Curl\SimpleCurl;
use Keiwen\Utils\Object\CacheHandlerTrait;

class RiotApi
{

    use CacheHandlerTrait;

    private $apiKey;
    protected $server;
    protected $baseUrl;
    /** @var MessageManager */
    protected $messageManager;
    protected $outputFormat;

    protected static $apiName = '';
    protected static $baseUrlPattern = '';

    protected static $lastCurlError = '';

    protected static $apiInstances = array();

    const API_GLOBAL = 'dataGlobal';
    const API_REGIONAL = 'regional';
    const API_STATUS = 'status';

    const FORMAT_JSON = 'json';
    const FORMAT_ARRAY = 'array';
    const FORMAT_STDCLASS = 'stdClass';
    const FORMAT_DTO = 'dto';


    /**
     * @return array
     */
    public static function getAvailableApis()
    {
        return array(
            self::API_GLOBAL,
            self::API_REGIONAL,
            self::API_STATUS,
        );
    }


    /**
     * @param string $api
     * @return RiotApi|null
     * @throws ApiNotFoundException
     */
    public function getApi(string $api)
    {
        if(!in_array($api, self::getAvailableApis())) {
            return null;
        }
        //check if already instantiated
        if(isset(self::$apiInstances[$api])) {
            return self::$apiInstances[$api];
        }
        $className = static::getApiClassName($api);
        if(!class_exists($className)) {
            throw new ApiNotFoundException($className);
        }
        $instance = new $className($this->apiKey, $this->server);
        self::$apiInstances[$api] = $instance;
        return $instance;
    }


    /**
     * @param string $api
     * @return string
     */
    protected static function getApiClassName(string $api)
    {
        return __NAMESPACE__ . '\\' . ucfirst($api) . 'Api';
    }


    /**
     * RiotApi constructor.
     *
     * @param string $apiKey
     * @param string $server
     * @param string $outputFormat
     * @param mixed  $cache (null disabling cache)
     * @param int    $defaultCacheLifetime
     * @param string $cacheKeyPrefix
     */
    public function __construct(string $apiKey,
                                string $server = '',
                                string $outputFormat = self::FORMAT_JSON,
                                $cache = null,
                                int $defaultCacheLifetime = 0,
                                string $cacheKeyPrefix = '')
    {
        $this->messageManager = new MessageManager();
        $this->baseUrl = static::$baseUrlPattern;
        $this->cache = $cache;
        $this->defaultCacheLifetime = $defaultCacheLifetime;
        $this->cacheKeyPrefix = $cacheKeyPrefix;
        $this->setApiKey($apiKey);
        $this->setServer($server);
        $this->setOutputFormat($outputFormat);
    }

    /**
     * @param string $server
     */
    public function setServer(string $server)
    {
        $server = Region::validateRegion($server);
        $this->server = $server;
    }

    /**
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param string $format
     */
    public function setOutputFormat(string $format = self::FORMAT_JSON)
    {
        $this->outputFormat = $format;
    }

    /**
     * @return string
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public static function getApiName()
    {
        return static::$apiName;
    }

    /**
     * @param string $serviceUrl
     * @param array  $queryParam
     * @param string $format
     * @param int    $cacheLifetime
     * @param string $dtoClass
     * @return array|DtoParent|\stdClass|string
     */
    public function query(string $serviceUrl,
                          array $queryParam = array(),
                          string $format = '',
                          int $cacheLifetime = 0,
                          string $dtoClass = DtoParent::class)
    {
        if(empty($format)) $format = $this->outputFormat;
        $url = $serviceUrl;
        if(!empty($this->baseUrl) && strpos($serviceUrl, $this->baseUrl) === false) {
            //if base url declared and not present in provided url, add it
            $url = $this->baseUrl . $serviceUrl;
        }
        //add api key as first param
        $url .= '?api_key=' . $this->apiKey;

        //add all provided params
        foreach($queryParam as $param => $value) {
            $url .= "&$param=$value";
        }
        //encode spaces
        $url = str_replace(' ', '%20', $url);

        static::$lastCurlError = '';
        //check in cache
        $json = $this->readInCache($url);
        if($json !== null) {
            $this->messageManager->addMessage(MessageManager::TYPE_MEMORY, $url);
            return $this->formatOutput($json, $format, $dtoClass);
        }

        $httpCode = 0;
        //check if curl enabled
        if(function_exists('curl_version')) {
            $json = $this->queryCurl($url, $httpCode);
            $method = 'curl';
        } else {
            //use file get content if no curl
            $json = $this->queryFileContent($url);
            $method = 'file_get_contents';
            if($json === null) $httpCode = -1;
        }

        $this->messageManager->addMessage(MessageManager::TYPE_REQUEST, $url);

        $msg = 'found';
        if($httpCode >= 400 || $httpCode <= 0) {
            //something went wrong
            switch($httpCode) {
                case -1: $msg = json_last_error_msg(); break;
                case 0: $msg = static::$lastCurlError; break;
                case 400: $msg = 'bad request'; break;
                case 401: $msg = 'unauthorized'; break;
                case 403: $msg = 'forbidden'; break;
                case 404: $msg = 'not found'; break;
                case 429: $msg = 'rate limit exceeded'; break;
                case 500: $msg = 'server error'; break;
                case 503: $msg = 'service unavailable'; break;
                default: $msg = 'unhandled error'; break;
            }
            $json = '';
            $this->messageManager->addMessage(
                MessageManager::TYPE_ADMIN,
                "Issue requesting $url ($method) => $httpCode: $msg"
            );
        }
        $this->messageManager->addMessage(
            MessageManager::TYPE_RESPONSE,
            "Request $method => $httpCode: $msg"
        );

        if(!in_array($httpCode, array(429))) {
            //dont store in cache in error among: 429-ratelimit
            $stored = $this->storeInCache($url, $json, $cacheLifetime);
            if($stored) {
                $this->messageManager->addMessage(MessageManager::TYPE_CACHE, 'Result stored in cache with lifetime ' . $cacheLifetime);
            } else {
                $this->messageManager->addMessage(MessageManager::TYPE_ERROR,
                    'Cannot store in cache class "' . get_class($this->cache) . '". Check setter methods.');
            }
        }

        return $this->formatOutput($json, $format, $dtoClass);
    }


    /**
     * @param $url
     * @return string
     */
    private function queryFileContent($url)
    {
        $json = file_get_contents($url);
        if(json_decode($json) === NULL) {
            switch(json_last_error()) {
                case(5):  //JSON_ERROR_UTF8
                    $json = utf8_encode($json);
                    $json = substr($json, 0, strlen($json)-2);
                    break;
            }
        }
        return $json;
    }

    /**
     * @param string $url
     * @param int    $httpCode
     * @return mixed
     */
    protected function queryCurl(string $url, &$httpCode = 0)
    {

        $curl = new SimpleCurl($url);
        $curl->addHeader('Content-Type', 'application/json');
        $curl->addOption(CURLOPT_SSL_VERIFYPEER, false);
        $data = $curl->query();
        if($curl->hasCurlError()) {
            static::$lastCurlError = "Curl error " . $curl->getCurlError();
        }
        $httpCode = $curl->getHttpCode();

        return $data;
    }



    /**
     * @return MessageManager
     */
    public function getMessageManager()
    {
        return $this->messageManager;
    }


    /**
     * @param string $json
     * @param string $format
     * @param string $dtoClass
     * @return DtoParent|\stdClass|array|string
     */
    protected function formatOutput(string $json,
                                    string $format = self::FORMAT_JSON,
                                    string $dtoClass = DtoParent::class)
    {
        if(empty($json)) $json = '';
        switch($format) {
            case self::FORMAT_STDCLASS: return json_decode($json); break;
            case self::FORMAT_ARRAY: return json_decode($json, true); break;
            case self::FORMAT_DTO:
                //if no Dto subclass provided, back on DtoParent
                if(!is_subclass_of($dtoClass, DtoParent::class)) {
                    $dtoClass = DtoParent::class;
                }
                //must check if json is a list of object
                $decoded = json_decode($json, true);
                if(empty($decoded)) $decoded = array();
                if(!ArrayAnalyser::isSequential($decoded, false)) {
                    return new $dtoClass($json);
                }
                //we have a list of object
                $dtoList = array();
                foreach($decoded as $elmt) {
                    $dtoList[] = new $dtoClass($elmt);
                }
                return $dtoList;
                break;
            //json by default
            default: return $json;
        }
    }


    /**
     * @return array
     */
    public function getServices()
    {
        return ServiceRegistry::getApiServices(static::$apiName);
    }


    /**
     * @param string $service
     * @return \Keiwen\RiotApi\Services\AbstractService
     */
    public function loadService(string $service)
    {
        return ServiceRegistry::loadService($service, $this);
    }
    
    /**
     * @param $output
     * @return string
     */
    public static function detectOutputFormat($output) {
        switch(true) {
            case empty($output):
                //cannot detect, return default
                return self::FORMAT_JSON;
            case $output instanceof DtoParent:
                //clear DTOParent
                return self::FORMAT_DTO;
            case is_array($output):
                //check if array of dto
                $first = reset($output);
                if($first instanceof DtoParent) {
                    return self::FORMAT_DTO;
                } else {
                    return self::FORMAT_ARRAY;
                }
                break;
            case is_object($output):
                //stdClass
                return self::FORMAT_STDCLASS;
        }
        return self::FORMAT_JSON;
    }


}
