<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\Summoner\SummonerGameListDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class Game extends AbstractService
{



    protected static function getServiceName() : string
    {
        return ServiceRegistry::GAME;
    }


    /**
     * Get recent games by summoner ID
     * @param int    $id
     * @param string $region
     * @return array|SummonerGameListDto|\stdClass|string
     */
    public function getSummonerRecent(int $id, $region = '')
    {
        return $this->query("by-summoner/$id/recent", SummonerGameListDto::class, $region);
    }



}
