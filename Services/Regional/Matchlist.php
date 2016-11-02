<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\Summoner\SummonerMatchReferenceListDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class Matchlist extends AbstractService
{

    protected static function getServiceName() : string
    {
        return ServiceRegistry::MATCHLIST;
    }


    /**
     * Retrieve match list by summoner ID
     * @param int    $id
     * @param array  $championIds
     * @param array  $rankedQueues
     * @param array  $seasons
     * @param int    $beginTime
     * @param int    $endTime
     * @param int    $beginIndex
     * @param int    $endIndex
     * @param string $region
     * @return array|SummonerMatchReferenceListDto|\stdClass|string
     */
    public function getSummoner(int $id,
                                array $championIds = array(),
                                array $rankedQueues = array(),
                                array $seasons = array(),
                                int $beginTime = 0,
                                int $endTime = 0,
                                int $beginIndex = 0,
                                int $endIndex = 0,
                                $region = '')
    {
        $queryParam = array();
        if(!empty($championIds)) $queryParam['championIds'] = implode(',', $championIds);
        if(!empty($rankedQueues)) $queryParam['rankedQueues'] = implode(',', $rankedQueues);
        if(!empty($seasons)) $queryParam['seasons'] = implode(',', $seasons);
        if(!empty($beginTime)) $queryParam['beginTime'] = $beginTime;
        if(!empty($endTime)) $queryParam['endTime'] = $endTime;
        if(!empty($beginIndex)) $queryParam['beginIndex'] = $beginIndex;
        if(!empty($endIndex)) $queryParam['endIndex'] = $endIndex;
        return $this->query("by-summoner/$id", SummonerMatchReferenceListDto::class, $region, $queryParam);
    }



}
