<?php

namespace Keiwen\RiotApi\Dto\Player;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 *
 */
class PlayerRuneDto extends DtoParent
{

    /**
     * @inheritdoc
     */
    protected static function retrieveFieldToAttributeMap()
    {
        $map = parent::retrieveFieldToAttributeMap();
        $map['rank'] = 'count';
        return $map;
    }


    /**
     * The ID of the rune
     * @return int
     */
    public function getRuneId()
    {
        return $this->get('runeId', 0);
    }

    /**
     * @param int $runeId
     * @return static
     */
    public function setRuneId(int $runeId) {
        return $this->set('runeId', $runeId);
    }

    /**
     * The count of this rune used by the participant
     * @return int
     */
    public function getCount()
    {
        return $this->get('count', 0);
    }

    /**
     * @param int $count
     * @return static
     */
    public function setCount(int $count) {
        return $this->set('count', $count);
    }


    /**
     * alias @see getCount()
     * @return int
     */
    public function getRank()
    {
        return $this->getCount();
    }

    /**
     * alias @see setCount()
     * @param int $rank
     * @return static
     */
    public function setRank(int $rank) {
        return $this->setCount($rank);
    }


}