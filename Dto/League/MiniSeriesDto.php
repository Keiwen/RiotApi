<?php

namespace Keiwen\RiotApi\Dto\League;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains mini series information.
 */
class MiniSeriesDto extends DtoParent
{

    /**
     * Number of current losses in the mini series.
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
     * String showing the current, sequential mini series progress where
     * - 'W' represents a win,
     * - 'L' represents a loss,
     * - 'N' represents a game that has not been played yet.
     * @return string
     */
    public function getProgress()
    {
        return $this->get('progress', '');
    }


    /**
     * @param string $progress
     * @return static
     */
    public function setProgress(string $progress)
    {
        return $this->set('progress', $progress);
    }


    /**
     * Number of wins required for promotion.
     * @return int
     */
    public function getTarget()
    {
        return $this->get('target', 0);
    }


    /**
     * @param int $target
     * @return static
     */
    public function setTarget(int $target)
    {
        return $this->set('target', $target);
    }


    /**
     * Number of current wins in the mini series.
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