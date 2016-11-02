<?php

namespace Keiwen\RiotApi\Dto\Player;



/**
 *
 */
class PlayerFellowDto extends PlayerReferenceDto
{


    /**
     * Summoner id associated with player.
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