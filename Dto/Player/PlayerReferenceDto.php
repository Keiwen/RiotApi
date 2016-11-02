<?php

namespace Keiwen\RiotApi\Dto\Player;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 *
 */
class PlayerReferenceDto extends DtoParent
{

    /**
     * Champion id associated with player.
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
     * Team id associated with player.
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