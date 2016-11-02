<?php

namespace Keiwen\RiotApi\Dto\Player;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 *
 */
class PlayerMasteryDto extends DtoParent
{

    /**
     * The ID of the mastery
     * @return int
     */
    public function getMasteryId()
    {
        return $this->get('masteryId', 0);
    }

    /**
     * @param int $masteryId
     * @return static
     */
    public function setMasteryId(int $masteryId) {
        return $this->set('masteryId', $masteryId);
    }

    /**
     * The number of points put into this mastery by the user
     * @return int
     */
    public function getRank()
    {
        return $this->get('rank', 0);
    }

    /**
     * @param int $rank
     * @return static
     */
    public function setRank(int $rank) {
        return $this->set('rank', $rank);
    }


}