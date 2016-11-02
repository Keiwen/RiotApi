<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Team\TeamDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class Team extends AbstractService
{

    protected static function getServiceName() : string
    {
        return ServiceRegistry::TEAM;
    }


    /**
     * Get teams mapped by summoner ID for a given list of summoner IDs
     * @param array  $ids
     * @param string $region
     * @return array|TeamDto[]|\stdClass|string
     */
    public function getSummoner(array $ids, $region = '')
    {
        $ids = implode(',', $ids);
        //!! map of object returned
        $result = $this->query("by-summoner/$ids", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, TeamDto::class);
    }

    /**
     * Get teams mapped by team ID for a given list of team IDs
     * @param array  $ids
     * @param string $region
     * @return array|TeamDto[]|\stdClass|string
     */
    public function get(array $ids, $region = '')
    {
        $ids = implode(',', $ids);
        //!! map of object returned
        $result = $this->query("$ids", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, TeamDto::class);
    }



}
