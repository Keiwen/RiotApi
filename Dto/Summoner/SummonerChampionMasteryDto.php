<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains single Champion Mastery information for player and champion combination.
 */
class SummonerChampionMasteryDto extends DtoParent
{

    /**
     * Champion ID for this entry.
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
    public function setChampionId(int $championId) {
        return $this->set('championId', $championId);
    }

    /**
     * Champion level for specified player and champion combination.
     * @return int
     */
    public function getChampionLevel()
    {
        return $this->get('championLevel', 0);
    }

    /**
     * @param int $championLevel
     * @return static
     */
    public function setChampionLevel(int $championLevel) {
        return $this->set('championLevel', $championLevel);
    }

    /**
     * Total number of champion points for this player and champion combination - they are used to determine championLevel.
     * @return int
     */
    public function getChampionPoints()
    {
        return $this->get('championPoints', 0);
    }

    /**
     * @param int $championPoints
     * @return static
     */
    public function setChampionPoints(int $championPoints) {
        return $this->set('championPoints', $championPoints);
    }

    /**
     * Number of points earned since current level has been achieved.
     * Zero if player reached maximum champion level for this champion.
     * @return int
     */
    public function getChampionPointsSinceLastLevel()
    {
        return $this->get('championPointsSinceLastLevel', 0);
    }

    /**
     * @param int $championPointsSinceLastLevel
     * @return static
     */
    public function setChampionPointsSinceLastLevel(int $championPointsSinceLastLevel) {
        return $this->set('championPointsSinceLastLevel', $championPointsSinceLastLevel);
    }

    /**
     * Number of points needed to achieve next level.
     * Zero if player reached maximum champion level for this champion.
     * @return int
     */
    public function getChampionPointsUntilNextLevel()
    {
        return $this->get('championPointsUntilNextLevel', 0);
    }

    /**
     * @param int $championPointsUntilNextLevel
     * @return static
     */
    public function setChampionPointsUntilNextLevel(int $championPointsUntilNextLevel) {
        return $this->set('championPointsUntilNextLevel', $championPointsUntilNextLevel);
    }



    /**
     * Is chest granted for this champion or not in current season.
     * @return bool
     */
    public function getChestGranted()
    {
        return $this->get('chestGranted', false);
    }

    /**
     * @param bool $chestGranted
     * @return static
     */
    public function setChestGranted(bool $chestGranted) {
        return $this->set('chestGranted', $chestGranted);
    }

    /**
     * Last time this champion was played by this player - in Unix milliseconds time format.
     * @return string
     */
    public function getLastPlayTime()
    {
        return $this->get('lastPlayTime', '0');
    }

    /**
     * @param int $lastPlayTime (could be given as float)
     * @return static
     */
    public function setLastPlayTime($lastPlayTime) {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('lastPlayTime', ''.$lastPlayTime);
    }

    /**
     * Player ID for this entry.
     * @return string
     */
    public function getPlayerId()
    {
        return $this->get('playerId', '0');
    }

    /**
     * @param int $playerId
     * @return static
     */
    public function setPlayerId($playerId) {
        //if int to large, turned to float, so always turned to string
        return $this->set('playerId', ''.$playerId);
    }




}
