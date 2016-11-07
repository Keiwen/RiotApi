<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Summoner\SummonerChampionMasteryDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class Championmastery extends AbstractService
{

    protected static $urlPattern = '/championmastery/location/{platform}';

    protected static function getServiceName() : string
    {
        return ServiceRegistry::CHAMPION_MASTERY;
    }


    /**
     * Get all champion mastery entries sorted by number of champion points descending
     * @param int    $playerId
     * @param string $region
     * @return array|SummonerChampionMasteryDto[]|\stdClass|string
     */
    public function getChampions(int $playerId, string $region = '')
    {
        return $this->query("player/$playerId/champions", SummonerChampionMasteryDto::class, $region);
    }

    /**
     * Get a champion mastery by player id and champion id
     * @param int    $id
     * @param int    $playerId
     * @param string $region
     * @return array|SummonerChampionMasteryDto|\stdClass|string
     */
    public function getChampion(int $id, int $playerId, string $region = '')
    {
        return $this->query("player/$playerId/champion/$id", SummonerChampionMasteryDto::class, $region);
    }

    /**
     * Get a player's total champion mastery score, which is sum of individual champion mastery levels
     * @param int    $playerId
     * @param string $region
     * @return array|DtoParent|\stdClass|string
     */
    public function getScore(int $playerId, string $region = '')
    {
        return $this->query("player/$playerId/score", DtoParent::class, $region);
    }

    /**
     * Get specified number of top champion mastery entries sorted by number of champion points descending
     * @param int    $playerId
     * @param int    $count
     * @param string $region
     * @return array|SummonerChampionMasteryDto[]|\stdClass|string
     */
    public function getTopChampions(int $playerId, int $count = 0, string $region = '')
    {
        $queryParam = $count > 0 ? array('count' => $count) : array();
        return $this->query("player/$playerId/topchampions", SummonerChampionMasteryDto::class, $region, $queryParam);
    }



}
