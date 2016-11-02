<?php

namespace Keiwen\RiotApi\Dto\Player;



/**
 * This object contains participant statistics information
 */
class ParticipantStatsDto extends RawStatsDto
{


    /**
     * Flag indicating if participant got an assist on first blood
     * @return bool
     */
    public function getFirstBloodAssist()
    {
        return $this->get('firstBloodAssist', false);
    }


    /**
     * @param bool $firstBloodAssist
     * @return static
     */
    public function setFirstBloodAssist(bool $firstBloodAssist)
    {
        return $this->set('firstBloodAssist', $firstBloodAssist);
    }

    /**
     * Flag indicating if participant got first blood
     * @return bool
     */
    public function getFirstBloodKill()
    {
        return $this->get('firstBloodKill', false);
    }


    /**
     * @param bool $firstBloodKill
     * @return static
     */
    public function setFirstBloodKill(bool $firstBloodKill)
    {
        return $this->set('firstBloodKill', $firstBloodKill);
    }

    /**
     * Flag indicating if participant got an assist on the first inhibitor
     * @return bool
     */
    public function getFirstInhibitorAssist()
    {
        return $this->get('firstInhibitorAssist', false);
    }


    /**
     * @param bool $firstInhibitorAssist
     * @return static
     */
    public function setFirstInhibitorAssist(bool $firstInhibitorAssist)
    {
        return $this->set('firstInhibitorAssist', $firstInhibitorAssist);
    }

    /**
     * Flag indicating if participant destroyed the first inhibitor
     * @return bool
     */
    public function getFirstInhibitorKill()
    {
        return $this->get('firstInhibitorKill', false);
    }


    /**
     * @param bool $firstInhibitorKill
     * @return static
     */
    public function setFirstInhibitorKill(bool $firstInhibitorKill)
    {
        return $this->set('firstInhibitorKill', $firstInhibitorKill);
    }

    /**
     * Flag indicating if participant got an assist on the first tower
     * @return bool
     */
    public function getFirstTowerAssist()
    {
        return $this->get('firstTowerAssist', false);
    }


    /**
     * @param bool $firstTowerAssist
     * @return static
     */
    public function setFirstTowerAssist(bool $firstTowerAssist)
    {
        return $this->set('firstTowerAssist', $firstTowerAssist);
    }

    /**
     * Flag indicating if participant destroyed the first tower
     * @return bool
     */
    public function getFirstTowerKill()
    {
        return $this->get('firstTowerKill', false);
    }


    /**
     * @param bool $firstTowerKill
     * @return static
     */
    public function setFirstTowerKill(bool $firstTowerKill)
    {
        return $this->set('firstTowerKill', $firstTowerKill);
    }



}