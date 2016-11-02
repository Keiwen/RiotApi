<?php

namespace Keiwen\RiotApi\Api;



use Keiwen\RiotApi\Services\DataGlobal\StaticData;
use Keiwen\RiotApi\Services\ServiceRegistry;

class GlobalApi extends RiotApi
{

    protected static $apiName = self::API_GLOBAL;
    protected static $baseUrlPattern = "https://global.api.pvp.net";


    /**
     * @return StaticData
     */
    public function getServiceStaticData()
    {
        return $this->loadService(ServiceRegistry::LOL_STATIC_DATA);
    }


}
