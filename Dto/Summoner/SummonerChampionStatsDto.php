<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains a collection of champion stats information.
 */
class SummonerChampionStatsDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['stats'] = SummonerAggregatedStatsDto::class;
        return $included;
    }


    /**
     * Champion ID. Note that champion ID 0 represents the combined stats for all champions.
     * For static information correlating to champion IDs, please refer to the LoL Static Data API.
     * @return int
     */
    public function getId()
    {
        return $this->get('id', 0);
    }


    /**
     * @param int $id
     * @return static
     */
    public function setId(int $id)
    {
        return $this->set('id', $id);
    }

    /**
     * Aggregated stats associated with the champion.
     * @return SummonerAggregatedStatsDto
     */
    public function getStats()
    {
        return $this->get('stats', new SummonerAggregatedStatsDto());
    }


    /**
     * @param SummonerAggregatedStatsDto $stats
     * @return static
     */
    public function setStats(SummonerAggregatedStatsDto $stats)
    {
        return $this->set('stats', $stats);
    }


}