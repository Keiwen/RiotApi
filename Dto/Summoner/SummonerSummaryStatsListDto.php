<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains a collection of player stats summary information.
 */
class SummonerSummaryStatsListDto extends DtoParent
{

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['playerStatSummaries'] = SummonerSummaryStatsListDto::class;
        return $included;
    }

    /**
     * Collection of player stats summaries associated with the summoner.
     * @return SummonerSummaryStatsListDto[]
     */
    public function getPlayerStatSummaries()
    {
        return $this->get('playerStatSummaries', array());
    }


    /**
     * @param SummonerSummaryStatsListDto[] $playerStatSummaries
     * @return static
     */
    public function setPlayerStatSummaries(array $playerStatSummaries)
    {
        return $this->set('playerStatSummaries', $playerStatSummaries);
    }

    /**
     * Summoner ID.
     * @return int
     */
    public function getSummonerId()
    {
        return $this->get('summonerId', 0);
    }


    /**
     * @param int $summonerId
     * @return static
     */
    public function setSummonerId(int $summonerId)
    {
        return $this->set('summonerId', $summonerId);
    }

}