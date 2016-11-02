<?php

namespace Keiwen\RiotApi\Dto\League;
use Keiwen\RiotApi\Constants\Playstyle;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains league participant information representing a summoner or team.
 */
class LeagueEntryDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['miniSeries'] = MiniSeriesDto::class;
        return $included;
    }



    /**
     * The league division of the participant.
     * @return string
     */
    public function getDivision()
    {
        return $this->get('division', '');
    }


    /**
     * @param string $division
     * @return static
     */
    public function setDivision(string $division)
    {
        return $this->set('division', $division);
    }


    /**
     * Specifies if the participant is fresh blood.
     * @return bool
     */
    public function getIsFreshBlood()
    {
        return $this->get('isFreshBlood', false);
    }


    /**
     * @param bool $isFreshBlood
     * @return static
     */
    public function setIsFreshBlood(bool $isFreshBlood)
    {
        return $this->set('isFreshBlood', $isFreshBlood);
    }


    /**
     * Specifies if the participant is on a hot streak.
     * @return bool
     */
    public function getIsHotStreak()
    {
        return $this->get('isHotStreak', false);
    }


    /**
     * @param bool $isHotStreak
     * @return static
     */
    public function setIsHotStreak(bool $isHotStreak)
    {
        return $this->set('isHotStreak', $isHotStreak);
    }


    /**
     * Specifies if the participant is inactive.
     * @return bool
     */
    public function getIsInactive()
    {
        return $this->get('isInactive', false);
    }


    /**
     * @param bool $isInactive
     * @return static
     */
    public function setIsInactive(bool $isInactive)
    {
        return $this->set('isInactive', $isInactive);
    }


    /**
     * Specifies if the participant is a veteran.
     * @return bool
     */
    public function getIsVeteran()
    {
        return $this->get('isVeteran', false);
    }


    /**
     * @param bool $isVeteran
     * @return static
     */
    public function setIsVeteran(bool $isVeteran)
    {
        return $this->set('isVeteran', $isVeteran);
    }


    /**
     * The league points of the participant.
     * @return int
     */
    public function getLeaguePoints()
    {
        return $this->get('leaguePoints', 0);
    }


    /**
     * @param int $leaguePoints
     * @return static
     */
    public function setLeaguePoints(int $leaguePoints)
    {
        return $this->set('leaguePoints', $leaguePoints);
    }


    /**
     * The number of losses for the participant.
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
     * Mini series data for the participant.
     * Only present if the participant is currently in a mini series.
     * @return MiniSeriesDto
     */
    public function getMiniSeries()
    {
        return $this->get('miniSeries', new MiniSeriesDto());
    }

    /**
     * @param MiniSeriesDto $miniSeries
     * @return static
     */
    public function setMiniSeries(MiniSeriesDto $miniSeries)
    {
        return $this->set('miniSeries', $miniSeries);
    }


    /**
     * The ID of the participant (i.e., summoner or team) represented by this entry.
     * @return string
     */
    public function getPlayerOrTeamId()
    {
        return $this->get('playerOrTeamId', '');
    }


    /**
     * @param string $playerOrTeamId
     * @return static
     */
    public function setPlayerOrTeamId(string $playerOrTeamId)
    {
        return $this->set('playerOrTeamId', $playerOrTeamId);
    }


    /**
     * The name of the the participant (i.e., summoner or team) represented by this entry.
     * @return string
     */
    public function getPlayerOrTeamName()
    {
        return $this->get('playerOrTeamName', '');
    }


    /**
     * @param string $playerOrTeamName
     * @return static
     */
    public function setPlayerOrTeamName(string $playerOrTeamName)
    {
        return $this->set('playerOrTeamName', $playerOrTeamName);
    }


    /**
     * The playstyle of the participant.
     * (Legal values: NONE, SOLO, SQUAD, TEAM)
     * @return string
     */
    public function getPlaystyle()
    {
        return $this->get('playstyle', Playstyle::NONE);
    }

    /**
     * @param string $playstyle
     * @return static
     */
    public function setPlaystyle(string $playstyle)
    {
        return $this->set('playstyle', $playstyle);
    }


    /**
     * The number of wins for the participant.
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