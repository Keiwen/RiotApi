<?php

namespace Keiwen\RiotApi\Services;


use Keiwen\RiotApi\Api\RiotApi;
use Keiwen\RiotApi\Constants\Region;
use Keiwen\RiotApi\Dto\DtoParent;

abstract class AbstractService
{

    /** @var RiotApi $riotApi */
    protected $riotApi;
    protected $region;
    protected $version;
    protected $outputFormat = '';

    protected static $urlPattern = '/api/lol/{region}/{version}/{service}';

    protected $overrideCacheLifetime = 0;
    protected $overrideCacheLifetimeQuery = 0;


    /**
     * Service constructor.
     * @param RiotApi $riotApi
     */
    public function __construct(RiotApi $riotApi)
    {
        $this->riotApi = $riotApi;
        $this->setRegion($riotApi->getServer());
        $this->setVersion(ServiceRegistry::getServiceVersion(static::getServiceName()));
        $this->setOutputFormat($riotApi->getOutputFormat());
    }

    /**
     * @return string
     */
    protected abstract static function getServiceName() : string;


    /**
     * @return string
     */
    public function getUrlPattern()
    {
        return str_replace('{service}', static::getServiceName(), static::$urlPattern);
    }


    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }


    /**
     * @param string $version
     */
    public function setOutputFormat(string $format)
    {
        $this->outputFormat = $format;
    }


    /**
     * @param string $region
     * @return string
     */
    public function setRegion(string $region)
    {
        $region = Region::validateRegion($region);
        return $this->region = $region;
    }


    /**
     * @param int $lifetime
     */
    public function overrideCacheLifetime(int $lifetime, $nextQueryOnly = true)
    {
        $this->overrideCacheLifetimeQuery = $lifetime;
        if(!$nextQueryOnly) {
            $this->overrideCacheLifetime = $lifetime;
        }
    }

    /**
     * @param string $operation
     * @param string $dtoClass
     * @param string $region
     * @param array  $queryParam
     * @return array|DtoParent|\stdClass|string
     */
    protected function query(string $operation, string $dtoClass = DtoParent::class, string $region = '', array $queryParam = array())
    {
        if(empty($region)) {
            $region = $this->region;
        } else {
            $region = Region::validateRegion($region);
        }
        $platform = Region::getPlatform($region);
        //create service url
        $serviceUrl = $this->getUrlPattern() . '/' . $operation;
        $serviceUrl = str_replace('{version}', 'v' . $this->getVersion(), $serviceUrl);
        $serviceUrl = str_replace('{region}', $region, $serviceUrl);
        $serviceUrl = str_replace('{platform}', $platform, $serviceUrl);
        if($region != $this->riotApi->getServer()) {
            //change server
            $this->riotApi->setServer($region);
        }

        //set cache lifetime if overrided
        $cacheLifetime = $this->overrideCacheLifetimeQuery;
        $this->overrideCacheLifetimeQuery = $this->overrideCacheLifetime;

        $response = $this->riotApi->query($serviceUrl, $queryParam, $this->outputFormat, $cacheLifetime, $dtoClass);
        return $response;
    }


    /**
     * @param array|DtoParent|\stdClass|string $result
     * @param string $dtoClass
     * @return array|DtoParent[]|\stdClass|string
     */
    protected function regenerateDtoMap($result, string $dtoClass = DtoParent::class)
    {
        if(!$result instanceof DtoParent) return $result;

        if(!is_subclass_of($dtoClass, DtoParent::class)) {
            $dtoClass = DtoParent::class;
        }
        //response is a map of wanted object, but was processed in a single object, re-create it
        $raw = $result->exportRawData();
        $result = array();
        foreach($raw as $key => $objectData) {
            $result[$key] = new $dtoClass($objectData);
        }
        return $result;
    }

}