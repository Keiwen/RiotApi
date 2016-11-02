<?php

namespace Keiwen\RiotApi\Api;

use Keiwen\RiotApi\Services\ServiceRegistry;
use Keiwen\RiotApi\Services\Status\Status;


class StatusApi extends RiotApi
{

    protected static $apiName = self::API_STATUS;
    protected static $baseUrlPattern = "http://status.leagueoflegends.com";


    /**
     * @return Status
     */
    public function getServiceStatus()
    {
        return $this->loadService(ServiceRegistry::LOL_STATUS);
    }

}
