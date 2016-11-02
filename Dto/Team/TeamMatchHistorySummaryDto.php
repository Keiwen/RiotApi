<?php

namespace Keiwen\RiotApi\Dto\Team;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains match history summary information.
 */
class TeamMatchHistorySummaryDto extends DtoParent
{



    /**
     *
     * @return int
     */
    public function getAssists()
    {
        return $this->get('assists', 0);
    }


    /**
     * @param int $assists
     * @return static
     */
    public function setAssists(int $assists)
    {
        return $this->set('assists', $assists);
    }

    /**
     * Date that match was completed specified as epoch milliseconds.
     * @return int
     */
    public function getDate()
    {
        return $this->get('date', 0);
    }


    /**
     * @param int $date
     * @return static
     */
    public function setDate(int $date)
    {
        return $this->set('date', $date);
    }

    /**
     *
     * @return int
     */
    public function getDeaths()
    {
        return $this->get('deaths', 0);
    }


    /**
     * @param int $deaths
     * @return static
     */
    public function setDeaths(int $deaths)
    {
        return $this->set('deaths', $deaths);
    }

    /**
     *
     * @return int
     */
    public function getGameId()
    {
        return $this->get('gameId', 0);
    }


    /**
     * @param int $gameId
     * @return static
     */
    public function setGameId(int $gameId)
    {
        return $this->set('gameId', $gameId);
    }

    /**
     *
     * @return string
     */
    public function getGameMode()
    {
        return $this->get('gameMode', '');
    }


    /**
     * @param string $gameMode
     * @return static
     */
    public function setGameMode(string $gameMode)
    {
        return $this->set('gameMode', $gameMode);
    }

    /**
     *
     * @return bool
     */
    public function getInvalid()
    {
        return $this->get('invalid', false);
    }


    /**
     * @param bool $invalid
     * @return static
     */
    public function setInvalid(bool $invalid)
    {
        return $this->set('invalid', $invalid);
    }

    /**
     *
     * @return int
     */
    public function getKills()
    {
        return $this->get('kills', 0);
    }


    /**
     * @param int $kills
     * @return static
     */
    public function setKills(int $kills)
    {
        return $this->set('kills', $kills);
    }

    /**
     *
     * @return int
     */
    public function getMapId()
    {
        return $this->get('mapId', 0);
    }


    /**
     * @param int $mapId
     * @return static
     */
    public function setMapId(int $mapId)
    {
        return $this->set('mapId', $mapId);
    }

    /**
     *
     * @return int
     */
    public function getOpposingTeamKills()
    {
        return $this->get('opposingTeamKills', 0);
    }


    /**
     * @param int $opposingTeamKills
     * @return static
     */
    public function setOpposingTeamKills(int $opposingTeamKills)
    {
        return $this->set('opposingTeamKills', $opposingTeamKills);
    }

    /**
     *
     * @return string
     */
    public function getOpposingTeamName()
    {
        return $this->get('opposingTeamName', '');
    }


    /**
     * @param string $opposingTeamName
     * @return static
     */
    public function setOpposingTeamName(string $opposingTeamName)
    {
        return $this->set('opposingTeamName', $opposingTeamName);
    }

    /**
     *
     * @return bool
     */
    public function getWin()
    {
        return $this->get('win', false);
    }


    /**
     * @param bool $win
     * @return static
     */
    public function setWin(bool $win)
    {
        return $this->set('win', $win);
    }



}