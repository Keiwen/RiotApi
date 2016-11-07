<?php

namespace Keiwen\RiotApi\Dto\Match;

use Keiwen\RiotApi\Dto\DtoParent;


/**
 * Banned champion information
 */
class BannedChampionDto extends DtoParent
{


    /**
     * The ID of the banned champion
     * @return int
     */
    public function getChampionId()
    {
        return $this->get('championId', 0);
    }


    /**
     * @param int $championId
     * @return static
     */
    public function setChampionId(int $championId)
    {
        return $this->set('championId', $championId);
    }

    /**
     * The turn during which the champion was banned
     * @return int
     */
    public function getPickTurn()
    {
        return $this->get('pickTurn', 0);
    }


    /**
     * @param int $pickTurn
     * @return static
     */
    public function setPickTurn(int $pickTurn)
    {
        return $this->set('pickTurn', $pickTurn);
    }

    /**
     * The ID of the team that banned the champion
     * @return int
     */
    public function getTeamId()
    {
        return $this->get('teamId', 0);
    }


    /**
     * @param int $teamId
     * @return static
     */
    public function setTeamId(int $teamId)
    {
        return $this->set('teamId', $teamId);
    }


}
