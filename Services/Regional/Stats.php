<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\Summoner\SummonerRankedStatsDto;
use Keiwen\RiotApi\Dto\Summoner\SummonerSummaryStatsListDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class Stats extends AbstractService
{

    protected static function getServiceName() : string
    {
        return ServiceRegistry::STATS;
    }


    /**
     * Get ranked stats by summoner ID
     * @param int    $id
     * @param array  $seasons
     * @param string $region
     * @return array|SummonerRankedStatsDto|\stdClass|string
     */
    public function getSummonerRanked(int $id,
                                array $seasons = array(),
                                $region = '')
    {
        $queryParam = array();
        if(!empty($seasons)) $queryParam['seasons'] = implode(',', $seasons);
        return $this->query("by-summoner/$id/ranked", SummonerRankedStatsDto::class, $region, $queryParam);
    }


    /**
     * Get player stats summaries by summoner ID
     * @param int    $id
     * @param array  $seasons
     * @param string $region
     * @return array|SummonerSummaryStatsListDto|\stdClass|string
     */
    public function getSummonerSummary(int $id,
                                      array $seasons = array(),
                                      $region = '')
    {
        $queryParam = array();
        if(!empty($seasons)) $queryParam['seasons'] = implode(',', $seasons);
        return $this->query("by-summoner/$id/summary", SummonerSummaryStatsListDto::class, $region, $queryParam);
    }


}
