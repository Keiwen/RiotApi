<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Constants\Lane;
use Keiwen\RiotApi\Constants\MatchmakingQueue;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains match reference information
 */
class SummonerMatchReferenceDto extends DtoParent
{


    /**
     *
     * @return int
     */
    public function getChampion()
    {
        return $this->get('champion', 0);
    }


    /**
     * @param int $champion
     * @return static
     */
    public function setChampion(int $champion)
    {
        return $this->set('champion', $champion);
    }


    /**
     * Legal values: MID, MIDDLE, TOP, JUNGLE, BOT, BOTTOM
     * @return string
     */
    public function getLane()
    {
        return $this->get('lane', Lane::MID);
    }


    /**
     * @param string $lane
     * @return static
     */
    public function setLane(string $lane)
    {
        return $this->set('lane', $lane);
    }

    /**
     *
     * @return string
     */
    public function getMatchId()
    {
        return $this->get('matchId', '0');
    }


    /**
     * @param int $matchId
     * @return static
     */
    public function setMatchId(int $matchId)
    {
        //if int to large, turned to float, so always turned to string
        return $this->set('matchId', ''.$matchId);
    }

    /**
     *
     * @return string
     */
    public function getPlatformId()
    {
        return $this->get('platformId', '');
    }


    /**
     * @param string $platformId
     * @return static
     */
    public function setPlatformId(string $platformId)
    {
        return $this->set('platformId', $platformId);
    }


    /**
     * Legal values: TEAM_BUILDER_DRAFT_RANKED_5x5, RANKED_SOLO_5x5, RANKED_TEAM_3x3, RANKED_TEAM_5x5
     * @return string
     */
    public function getQueue()
    {
        return $this->get('queue', MatchmakingQueue::RANKED_SOLO_5x5);
    }


    /**
     * @param string $queue
     * @return static
     */
    public function setQueue(string $queue)
    {
        return $this->set('queue', $queue);
    }

    /**
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->get('region', '');
    }


    /**
     * @param string $region
     * @return static
     */
    public function setRegion(string $region)
    {
        return $this->set('region', $region);
    }


    /**
     * Legal values: DUO, NONE, SOLO, DUO_CARRY, DUO_SUPPORT
     * @return string
     */
    public function getRole()
    {
        return $this->get('role', 'NONE');
    }


    /**
     * @param string $role
     * @return static
     */
    public function setRole(string $role)
    {
        return $this->set('role', $role);
    }


    /**
     * Legal values: PRESEASON3, SEASON3, PRESEASON2014, SEASON2014, PRESEASON2015, SEASON2015, PRESEASON2016, SEASON2016
     * @return string
     */
    public function getSeason()
    {
        return $this->get('season', 'PRESEASON3');
    }


    /**
     * @param string $season
     * @return static
     */
    public function setSeason(string $season)
    {
        return $this->set('season', $season);
    }

    /**
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->get('timestamp', '0');
    }


    /**
     * @param int $timestamp
     * @return static
     */
    public function setTimestamp($timestamp)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('timestamp', ''.$timestamp);
    }



}
