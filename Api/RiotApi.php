<?php

namespace Keiwen\RiotApi\Api;



use Keiwen\RiotApi\Constants\Region;
use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Exceptions\ApiNotFoundException;
use Keiwen\RiotApi\Exceptions\UnhandledCacheException;
use Keiwen\RiotApi\Services\ServiceRegistry;
use Keiwen\Utils\Analyse\ArrayAnalyser;

class RiotApi
{

    private $apiKey;
    protected $server;
    protected $baseUrl;
    /** @var MessageManager */
    protected $messageManager;
    protected $outputFormat;
    protected $defaultCacheLifetime;
    protected $cache;
    protected $cacheKeyPrefix;

    protected static $staticCache = array();
    protected static $apiName = '';
    protected static $baseUrlPattern = '';

    protected static $apiInstances = array();

    protected static $cacheGetters = array('get', 'fetch');
    protected static $cacheSetters = array('set', 'save');

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
        $this->defaultCacheLifetime = $defaultCacheLifetime;
        $this->cache = $cache;
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

        //check in cache
        $json = $this->readUrlInCache($url);
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
        if($httpCode >= 400 || $httpCode < 0) {
            //something went wrong
            switch($httpCode) {
                case -1: $msg = json_last_error_msg(); break;
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
            $this->storeUrlInCache($url, $json, $cacheLifetime);
            $this->messageManager->addMessage(MessageManager::TYPE_CACHE, 'Result stored in cache with lifetime ' . $cacheLifetime);
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
     * @param int    $http_code
     * @return mixed
     */
    protected function queryCurl(string $url, &$http_code = 0)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        //dont check SSL certificate
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $headers = array('Content-Type: application/json');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $data = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //$errno = curl_errno($ch);
        //$error = curl_error($ch);
        curl_close($ch);

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
     * @return bool
     */
    public function hasCacheEnabled()
    {
        return !empty($this->cache);
    }


    /**
     */
    public function disableCache()
    {
        $this->cache = null;
    }

    /**
     * @param string $partKey
     * @return string
     */
    public function getCacheFullKey(string $partKey)
    {
        return $this->cacheKeyPrefix . $partKey;
    }


    /**
     * Only static cache used by default, you should extends parent class to implement a cache system
     * @param string $url
     * @param string $data
     * @param int $cacheLifetime (in seconds) not used by default
     * @throws UnhandledCacheException
     */
    protected function storeUrlInCache(string $url, string $data, int $cacheLifetime = 0)
    {
        if(empty($cacheLifetime)) $cacheLifetime = $this->defaultCacheLifetime;
        static::$staticCache[$url] = $data;
        if(!$this->hasCacheEnabled()) return;
        $cacheKey = $this->getCacheFullKey($url);
        $setterFound = false;
        foreach(static::$cacheSetters as $setter) {
            if(method_exists($this->cache, $setter)) {
                try {
                    $this->cache->$setter($cacheKey, $data, $cacheLifetime);
                    $setterFound = true;
                    break;
                } catch (\Exception $e) {

                }
            }
        }
        if(!$setterFound) throw new UnhandledCacheException(get_class($this->cache), static::$cacheSetters);
    }

    /**
     * @param string $url
     * @return string|null null means not found in cache
     * @throws UnhandledCacheException
     */
    protected function readUrlInCache(string $url)
    {
        $static = isset(static::$staticCache[$url]) ? static::$staticCache[$url] : null;
        if($static !== null) return $static;
        if(!$this->hasCacheEnabled()) return null;
        $cacheKey = $this->getCacheFullKey($url);
        foreach(static::$cacheGetters as $getter) {
            if(method_exists($this->cache, $getter)) {
                try {
                    $data = $this->cache->$getter($cacheKey);
                    return $data;
                } catch (\Exception $e) {

                }
            }
        }
        throw new UnhandledCacheException(get_class($this->cache), static::$cacheGetters);
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


    public function loadService(string $service)
    {
        return ServiceRegistry::loadService($service, $this);
    }

}
