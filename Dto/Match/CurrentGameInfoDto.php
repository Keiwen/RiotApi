<?php

namespace Keiwen\RiotApi\Dto\Match;
use Keiwen\RiotApi\Dto\Player\CurrentParticipantDto;


/**
 *
 */
class CurrentGameInfoDto extends GameDto
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['bannedChampions'] = BannedChampionDto::class;
        $included['observers'] = ObserverDto::class;
        $included['participants'] = CurrentParticipantDto::class;
        return $included;
    }


    /**
     * Banned champion information
     * @return BannedChampionDto[]
     */
    public function getBannedChampions()
    {
        return $this->get('bannedChampions', array());
    }

    /**
     * @param BannedChampionDto[] $bannedChampions
     * @return static
     */
    public function setBannedChampions(array $bannedChampions) {
        return $this->set('bannedChampions', $bannedChampions);
    }

    /**
     * The amount of time in seconds that has passed since the game started
     * @return int
     */
    public function getGameLength()
    {
        return $this->get('gameLength', false);
    }

    /**
     * @param int $gameLength
     * @return static
     */
    public function setGameLength(int $gameLength) {
        return $this->set('gameLength', $gameLength);
    }

    /**
     * The queue type (queue types are documented on the Game Constants page)
     * @return int
     */
    public function getGameQueueConfigId()
    {
        return $this->get('gameQueueConfigId', 0);
    }

    /**
     * @param int $gameQueueConfigId
     * @return static
     */
    public function setGameQueueConfigId(int $gameQueueConfigId) {
        return $this->set('gameQueueConfigId', $gameQueueConfigId);
    }

    /**
     * The game start time represented in epoch milliseconds
     * @return string
     */
    public function getGameStartTime()
    {
        return $this->get('gameStartTime', '0');
    }

    /**
     * @param int $gameStartTime
     * @return static
     */
    public function setGameStartTime($gameStartTime) {
        //if int to large, turned to float, so always turned to string
        return $this->set('gameStartTime', ''.$gameStartTime);
    }


    /**
     * The observer information
     * @return ObserverDto[]
     */
    public function getObservers()
    {
        return $this->get('observers', array());
    }

    /**
     * @param ObserverDto[] $observers
     * @return static
     */
    public function setObservers(array $observers) {
        return $this->set('observers', $observers);
    }


    /**
     * The participant information
     * @return CurrentParticipantDto[]
     */
    public function getParticipants()
    {
        return $this->get('participants', array());
    }

    /**
     * @param CurrentParticipantDto[] $participants
     * @return static
     */
    public function setParticipants(array $participants) {
        return $this->set('participants', $participants);
    }

    /**
     * The ID of the platform on which the game is being played
     * @return int
     */
    public function getPlatformId()
    {
        return $this->get('platformId', 0);
    }

    /**
     * @param int $platformId
     * @return static
     */
    public function setPlatformId(int $platformId) {
        return $this->set('platformId', $platformId);
    }


}
