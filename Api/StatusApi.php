<?php

namespace Keiwen\RiotApi\Api;

use Keiwen\RiotApi\Services\ServiceRegistry;
use Keiwen\RiotApi\Services\Status\LolStatus;


class StatusApi extends RiotApi
{

    protected static $apiName = self::API_STATUS;
    protected static $baseUrlPattern = "http://status.leagueoflegends.com";


    /**
     * @return LolStatus
     */
    public function getServiceStatus()
    {
        return $this->loadService(ServiceRegistry::LOL_STATUS);
    }

}
