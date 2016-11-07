<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\Match\CurrentGameInfoDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class CurrentGame extends AbstractService
{


    protected static $urlPattern = '/observer-mode/rest/consumer/getSpectatorGameInfo/{platform}';

    protected static function getServiceName() : string
    {
        return ServiceRegistry::CURRENT_GAME;
    }


    /**
     * Get current game information for the given summoner ID
     * @param int    $id
     * @param string $region
     * @return array|CurrentGameInfoDto|\stdClass|string
     */
    public function getSummoner(int $id, $region = '')
    {
        return $this->query("$id", CurrentGameInfoDto::class, $region);
    }



}
