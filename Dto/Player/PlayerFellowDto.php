<?php

namespace Keiwen\RiotApi\Dto\Player;



/**
 *
 */
class PlayerFellowDto extends PlayerReferenceDto
{


    /**
     * Summoner id associated with player.
     * @return string
     */
    public function getSummonerId()
    {
        return $this->get('summonerId', '0');
    }


    /**
     * @param int $summonerId
     * @return static
     */
    public function setSummonerId($summonerId)
    {
        //if int to large, turned to float, so always turned to string
        return $this->set('summonerId', ''.$summonerId);
    }




}
