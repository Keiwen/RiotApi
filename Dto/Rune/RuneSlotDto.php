<?php

namespace Keiwen\RiotApi\Dto\Rune;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains rune slot information.
 */
class RuneSlotDto extends DtoParent
{

    /**
     * Rune ID associated with the rune slot.
     * For static information correlating to rune IDs, please refer to the LoL Static Data API.
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
    public function setRuneId(int $runeId)
    {
        return $this->set('runeId', $runeId);
    }

    /**
     * Rune slot ID.
     * @return int
     */
    public function getRuneSlotId()
    {
        return $this->get('runeSlotId', 0);
    }


    /**
     * @param int $runeSlotId
     * @return static
     */
    public function setRuneSlotId(int $runeSlotId)
    {
        return $this->set('runeSlotId', $runeSlotId);
    }



}