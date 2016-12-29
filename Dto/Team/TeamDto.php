<?php

namespace Keiwen\RiotApi\Dto\Team;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains team information.
 */
class TeamDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['matchHistory'] = TeamMatchHistorySummaryDto::class;
        $included['roster'] = TeamRosterDto::class;
        $included['teamStatDetails'] = TeamSummaryStatsDto::class;
        return $included;
    }


    /**
     * Date that team was created specified as epoch milliseconds.
     * @return string
     */
    public function getCreateDate()
    {
        return $this->get('createDate', '0');
    }


    /**
     * @param int $createDate
     * @return static
     */
    public function setCreateDate($createDate)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('createDate', ''.$createDate);
    }

    /**
     *
     * @return string
     */
    public function getFullId()
    {
        return $this->get('fullId', '');
    }


    /**
     * @param string $fullId
     * @return static
     */
    public function setFullId(string $fullId)
    {
        return $this->set('fullId', $fullId);
    }

    /**
     * Date that last game played by team ended specified as epoch milliseconds.
     * @return string
     */
    public function getLastGameDate()
    {
        return $this->get('lastGameDate', '0');
    }


    /**
     * @param int $lastGameDate
     * @return static
     */
    public function setLastGameDate($lastGameDate)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('lastGameDate', ''.$lastGameDate);
    }

    /**
     * Date that last member joined specified as epoch milliseconds.
     * @return string
     */
    public function getLastJoinDate()
    {
        return $this->get('lastJoinDate', '0');
    }


    /**
     * @param int $lastJoinDate
     * @return static
     */
    public function setLastJoinDate($lastJoinDate)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('lastJoinDate', ''.$lastJoinDate);
    }

    /**
     * Date that team last joined the ranked team queue specified as epoch milliseconds.
     * @return string
     */
    public function getLastJoinedRankedTeamQueueDate()
    {
        return $this->get('lastJoinedRankedTeamQueueDate', '0');
    }


    /**
     * @param int $lastJoinedRankedTeamQueueDate
     * @return static
     */
    public function setLastJoinedRankedTeamQueueDate($lastJoinedRankedTeamQueueDate)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('lastJoinedRankedTeamQueueDate', ''.$lastJoinedRankedTeamQueueDate);
    }

    /**
     *
     * @return TeamMatchHistorySummaryDto[]
     */
    public function getMatchHistory()
    {
        return $this->get('matchHistory', array());
    }


    /**
     * @param TeamMatchHistorySummaryDto[] $matchHistory
     * @return static
     */
    public function setMatchHistory($matchHistory)
    {
        if(empty($matchHistory)) $matchHistory = array();
        return $this->set('matchHistory', $matchHistory);
    }

    /**
     * Date that team was last modified specified as epoch milliseconds.
     * @return string
     */
    public function getModifyDate()
    {
        return $this->get('modifyDate', '0');
    }


    /**
     * @param int $modifyDate
     * @return static
     */
    public function setModifyDate($modifyDate)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('modifyDate', ''.$modifyDate);
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->get('name', '');
    }


    /**
     * @param string $name
     * @return static
     */
    public function setName(string $name)
    {
        return $this->set('name', $name);
    }

    /**
     *
     * @return TeamRosterDto
     */
    public function getRoster()
    {
        return $this->get('roster', new TeamRosterDto());
    }


    /**
     * @param TeamRosterDto $roster
     * @return static
     */
    public function setRoster(TeamRosterDto $roster)
    {
        return $this->set('roster', $roster);
    }

    /**
     * Date that second to last member joined specified as epoch milliseconds.
     * @return string
     */
    public function getSecondLastJoinDate()
    {
        return $this->get('secondLastJoinDate', '0');
    }


    /**
     * @param int $secondLastJoinDate
     * @return static
     */
    public function setSecondLastJoinDate($secondLastJoinDate)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('secondLastJoinDate', ''.$secondLastJoinDate);
    }

    /**
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->get('status', '');
    }


    /**
     * @param string $status
     * @return static
     */
    public function setStatus(string $status)
    {
        return $this->set('status', $status);
    }

    /**
     *
     * @return string
     */
    public function getTag()
    {
        return $this->get('tag', '');
    }


    /**
     * @param string $tag
     * @return static
     */
    public function setTag(string $tag)
    {
        return $this->set('tag', $tag);
    }

    /**
     *
     * @return TeamSummaryStatsDto[]
     */
    public function getTeamStatDetails()
    {
        return $this->get('teamStatDetails', array());
    }


    /**
     * @param TeamSummaryStatsDto[] $teamStatDetails
     * @return static
     */
    public function setTeamStatDetails($teamStatDetails)
    {
        if(empty($teamStatDetails)) $teamStatDetails = array();
        return $this->set('teamStatDetails', $teamStatDetails);
    }

    /**
     * Date that third to last member joined specified as epoch milliseconds.
     * @return string
     */
    public function getThirdLastJoinDate()
    {
        return $this->get('thirdLastJoinDate', '0');
    }


    /**
     * @param int $thirdLastJoinDate
     * @return static
     */
    public function setThirdLastJoinDate($thirdLastJoinDate)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('thirdLastJoinDate', ''.$thirdLastJoinDate);
    }



}
