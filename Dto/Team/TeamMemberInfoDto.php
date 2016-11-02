<?php

namespace Keiwen\RiotApi\Dto\Team;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains team member information.
 */
class TeamMemberInfoDto extends DtoParent
{


    /**
     * Date that team member was invited to team specified as epoch milliseconds.
     * @return int
     */
    public function getInviteDate()
    {
        return $this->get('inviteDate', 0);
    }


    /**
     * @param int $inviteDate
     * @return static
     */
    public function setInviteDate(int $inviteDate)
    {
        return $this->set('inviteDate', $inviteDate);
    }

    /**
     * Date that team member joined team specified as epoch milliseconds.
     * @return int
     */
    public function getJoinDate()
    {
        return $this->get('joinDate', 0);
    }


    /**
     * @param int $joinDate
     * @return static
     */
    public function setJoinDate(int $joinDate)
    {
        return $this->set('joinDate', $joinDate);
    }

    /**
     *
     * @return int
     */
    public function getPlayerId()
    {
        return $this->get('playerId', 0);
    }


    /**
     * @param int $playerId
     * @return static
     */
    public function setPlayerId(int $playerId)
    {
        return $this->set('playerId', $playerId);
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


}