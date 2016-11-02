<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\League\LeagueDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class League extends AbstractService
{

    protected static function getServiceName() : string
    {
        return ServiceRegistry::LEAGUE;
    }


    /**
     * Get leagues mapped by summoner ID for a given list of summoner IDs
     * @param array  $ids
     * @param string $region
     * @return array|LeagueDto[]|null|\stdClass|string
     */
    public function getSummonerLeagueFull(array $ids, $region = '')
    {
        if(empty($ids)) return null;
        $ids = implode(',', $ids);
        //!! map of object returned
        $result = $this->query("by-summoner/$ids", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, LeagueDto::class);
    }

    /**
     * Get league entries mapped by summoner ID for a given list of summoner IDs
     * @param array  $ids
     * @param string $region
     * @return array|LeagueDto[]|null|\stdClass|string
     */
    public function getSummonerLeagueEntry(array $ids, $region = '')
    {
        if(empty($ids)) return null;
        $ids = implode(',', $ids);
        //!! map of object returned
        $result = $this->query("by-summoner/$ids/entry", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, LeagueDto::class);
    }

    /**
     * Get leagues mapped by team ID for a given list of team IDs
     * @param array  $ids
     * @param string $region
     * @return array|LeagueDto[]|null|\stdClass|string
     */
    public function getTeamLeagueFull(array $ids, $region = '')
    {
        if(empty($ids)) return null;
        $ids = implode(',', $ids);
        //!! map of object returned
        $result = $this->query("by-team/$ids", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, LeagueDto::class);
    }

    /**
     * Get league entries mapped by team ID for a given list of team IDs
     * @param array  $ids
     * @param string $region
     * @return array|LeagueDto[]|null|\stdClass|string
     */
    public function getTeamLeagueEntry(array $ids, $region = '')
    {
        if(empty($ids)) return null;
        $ids = implode(',', $ids);
        //!! map of object returned
        $result = $this->query("by-team/$ids/entry", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, LeagueDto::class);
    }

    /**
     * Get challenger tier leagues
     * @param string $type
     * @param string $region
     * @return array|LeagueDto|\stdClass|string
     */
    public function getChallenger(string $type, $region = '')
    {
        $queryParam = array('type' => $type);
        return $this->query("challenger", LeagueDto::class, $region, $queryParam);
    }

    /**
     * Get master tier leagues
     * @param string $type
     * @param string $region
     * @return array|LeagueDto|\stdClass|string
     */
    public function getMaster(string $type, $region = '')
    {
        $queryParam = array('type' => $type);
        return $this->query("master", LeagueDto::class, $region, $queryParam);
    }



}
