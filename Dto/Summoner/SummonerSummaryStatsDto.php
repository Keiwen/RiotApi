<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Constants\StatsSummaryType;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains player stats summary information.
 */
class SummonerSummaryStatsDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['aggregatedStats'] = SummonerAggregatedStatsDto::class;
        return $included;
    }


    /**
     * Aggregated stats.
     * @return SummonerAggregatedStatsDto
     */
    public function getAggregatedStats()
    {
        return $this->get('aggregatedStats', new SummonerAggregatedStatsDto());
    }


    /**
     * @param SummonerAggregatedStatsDto $aggregatedStats
     * @return static
     */
    public function setAggregatedStats(SummonerAggregatedStatsDto $aggregatedStats)
    {
        return $this->set('aggregatedStats', $aggregatedStats);
    }

    /**
     * Number of losses for this queue type.
     * Returned for ranked queue types only.
     * @return int
     */
    public function getLosses()
    {
        return $this->get('losses', 0);
    }


    /**
     * @param int $losses
     * @return static
     */
    public function setLosses(int $losses)
    {
        return $this->set('losses', $losses);
    }

    /**
     * Date stats were last modified specified as epoch milliseconds.
     * @return int
     */
    public function getModifyDate()
    {
        return $this->get('modifyDate', 0);
    }


    /**
     * @param int $modifyDate
     * @return static
     */
    public function setModifyDate(int $modifyDate)
    {
        return $this->set('modifyDate', $modifyDate);
    }

    /**
     * Player stats summary type.
     * (Legal values: AramUnranked5x5, Ascension, Bilgewater, CAP5x5, CoopVsAI,
     * CoopVsAI3x3, CounterPick, FirstBlood1x1, FirstBlood2x2, Hexakill,
     * KingPoro, NightmareBot, OdinUnranked, OneForAll5x5, RankedPremade3x3,
     * RankedPremade5x5, RankedSolo5x5, RankedTeam3x3, RankedTeam5x5,
     * SummonersRift6x6, Unranked, Unranked3x3, URF, URFBots)
     * @return string
     */
    public function getPlayerStatSummaryType()
    {
        return $this->get('playerStatSummaryType', StatsSummaryType::COOP_VS_AI);
    }


    /**
     * @param string $playerStatSummaryType
     * @return static
     */
    public function setPlayerStatSummaryType(string $playerStatSummaryType)
    {
        return $this->set('playerStatSummaryType', $playerStatSummaryType);
    }

    /**
     * Number of wins for this queue type.
     * @return int
     */
    public function getWins()
    {
        return $this->get('wins', 0);
    }


    /**
     * @param int $wins
     * @return static
     */
    public function setWins(int $wins)
    {
        return $this->set('wins', $wins);
    }


}