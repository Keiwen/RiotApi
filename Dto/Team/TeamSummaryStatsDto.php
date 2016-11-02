<?php

namespace Keiwen\RiotApi\Dto\Team;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains team statistics detail information.
 */
class TeamSummaryStatsDto extends DtoParent
{


    /**
     *
     * @return int
     */
    public function getAverageGamesPlayed()
    {
        return $this->get('averageGamesPlayed', 0);
    }


    /**
     * @param int $averageGamesPlayed
     * @return static
     */
    public function setAverageGamesPlayed(int $averageGamesPlayed)
    {
        return $this->set('averageGamesPlayed', $averageGamesPlayed);
    }

    /**
     *
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
     *
     * @return string
     */
    public function getTeamStatType()
    {
        return $this->get('teamStatType', '');
    }


    /**
     * @param string $teamStatType
     * @return static
     */
    public function setTeamStatType(string $teamStatType)
    {
        return $this->set('teamStatType', $teamStatType);
    }

    /**
     *
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