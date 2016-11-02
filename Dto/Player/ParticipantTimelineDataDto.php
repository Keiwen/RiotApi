<?php

namespace Keiwen\RiotApi\Dto\Player;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains timeline data
 */
class ParticipantTimelineDataDto extends DtoParent
{

    /**
     * Value per minute from 10 min to 20 min
     * @return float
     */
    public function getTenToTwenty()
    {
        return $this->get('tenToTwenty', 0);
    }


    /**
     * @param float $tenToTwenty
     * @return static
     */
    public function setTenToTwenty(float $tenToTwenty)
    {
        return $this->set('tenToTwenty', $tenToTwenty);
    }

    /**
     * Value per minute from 30 min to the end of the game
     * @return float
     */
    public function getThirtyToEnd()
    {
        return $this->get('thirtyToEnd', 0);
    }


    /**
     * @param float $thirtyToEnd
     * @return static
     */
    public function setThirtyToEnd(float $thirtyToEnd)
    {
        return $this->set('thirtyToEnd', $thirtyToEnd);
    }

    /**
     * Value per minute from 20 min to 30 min
     * @return float
     */
    public function getTwentyToThirty()
    {
        return $this->get('twentyToThirty', 0);
    }


    /**
     * @param float $twentyToThirty
     * @return static
     */
    public function setTwentyToThirty(float $twentyToThirty)
    {
        return $this->set('twentyToThirty', $twentyToThirty);
    }

    /**
     * Value per minute from the beginning of the game to 10 min
     * @return float
     */
    public function getZeroToTen()
    {
        return $this->get('zeroToTen', 0);
    }


    /**
     * @param float $zeroToTen
     * @return static
     */
    public function setZeroToTen(float $zeroToTen)
    {
        return $this->set('zeroToTen', $zeroToTen);
    }



}