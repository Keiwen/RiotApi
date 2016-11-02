<?php

namespace Keiwen\RiotApi\Services;


use Keiwen\RiotApi\Api\RiotApi;
use Keiwen\RiotApi\Exceptions\InvalidServiceException;
use Keiwen\RiotApi\Exceptions\ServiceNotFoundException;

class ServiceRegistry
{


    const CHAMPION = 'champion';
    const CHAMPION_MASTERY = 'championmastery';
    const CURRENT_GAME = 'current-game';
    const FEATURED_GAMES = 'featured-games';
    const GAME = 'game';
    const LEAGUE = 'league';
    const LOL_STATIC_DATA = 'static-data';
    const LOL_STATUS = 'status';
    const MATCH = 'match';
    const MATCHLIST = 'matchlist';
    const STATS = 'stats';
    const SUMMONER = 'summoner';
    const TEAM = 'team';

    protected static $__validServices;



    /**
     * @return array
     */
    public static function getServicesApiMap()
    {
        return array(
            self::CHAMPION => RiotApi::API_REGIONAL,
            self::CHAMPION_MASTERY => RiotApi::API_REGIONAL,
            self::CURRENT_GAME => RiotApi::API_REGIONAL,
            self::FEATURED_GAMES => RiotApi::API_REGIONAL,
            self::GAME => RiotApi::API_REGIONAL,
            self::LEAGUE => RiotApi::API_REGIONAL,
            self::LOL_STATIC_DATA => RiotApi::API_GLOBAL,
            self::LOL_STATUS => RiotApi::API_STATUS,
            self::MATCH => RiotApi::API_REGIONAL,
            self::MATCHLIST => RiotApi::API_REGIONAL,
            self::STATS => RiotApi::API_REGIONAL,
            self::SUMMONER => RiotApi::API_REGIONAL,
            self::TEAM => RiotApi::API_REGIONAL,
        );
    }

    /**
     * @return array
     */
    public static function getServicesVersionsMap()
    {
        return array(
            self::CHAMPION => '1.2',
            self::CHAMPION_MASTERY => '',
            self::CURRENT_GAME => '1.0',
            self::FEATURED_GAMES => '1.0',
            self::GAME => '1.3',
            self::LEAGUE => '2.5',
            self::LOL_STATIC_DATA => '1.2',
            self::LOL_STATUS => '1.0',
            self::MATCH => '2.2',
            self::MATCHLIST => '2.2',
            self::STATS => '1.3',
            self::SUMMONER => '1.4',
            self::TEAM => '2.4',
        );
    }


    /**
     * @return array
     */
    public static function getValidServices()
    {
        if(empty(static::$__validServices)) {
            $rClass = new \ReflectionClass(static::class);
            static::$__validServices = array_values($rClass->getConstants());
        }
        return static::$__validServices;
    }


    /**
     * @param string $service
     * @param string $api
     * @return bool
     */
    public static function isServiceValid(string $service, string $api = '')
    {
        if(empty($api)) {
            //check if service exists among all apis
            $map = static::getValidServices();
            return isset($map[$service]);
        } else {
            return static::getServiceApi($service) == $api;
        }
    }



    /**
     * @param string $api
     * @return array
     */
    public static function getApiServices(string $api)
    {
        $services = array();
        $allservices = static::getServicesApiMap();
        foreach($allservices as $service => $servApi) {
            if(empty($api) || $servApi == $api) {
                $services[] = $service;
            }
        }
        return $services;
    }


    /**
     * @param string $service
     * @return string
     */
    public static function getServiceApi(string $service)
    {
        $map = static::getServicesApiMap();
        return isset($map[$service]) ? $map[$service] : '';
    }


    /**
     * @param string $service
     * @return string
     */
    public static function getServiceVersion(string $service)
    {
        $map = static::getServicesVersionsMap();
        return isset($map[$service]) ? $map[$service] : '';
    }

    /**
     * @param string $api
     * @return string
     */
    protected static function getServiceClassName(string $service)
    {
        $api = static::getServiceApi($service);
        if(empty($api)) {
            throw new InvalidServiceException($service);
        }
        return __NAMESPACE__ . '\\' . ucfirst($api) . '\\' . ucfirst($service);
    }


    /**
     * @param string  $service
     * @param RiotApi $api
     * @return AbstractService
     * @throws ServiceNotFoundException
     */
    public static function loadService(string $serviceName, RiotApi $api)
    {
        $apiName = static::getServiceApi($serviceName);
        if($apiName != $api::getApiName()) {
            throw new InvalidServiceException($serviceName, $api::getApiName());
        }
        $className = static::getServiceClassName($serviceName);
        if(!class_exists($className)) {
            throw new ServiceNotFoundException($className);
        }
        $service = new $className($api);
        return $service;
    }

}