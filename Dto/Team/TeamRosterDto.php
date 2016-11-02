<?php

namespace Keiwen\RiotApi\Dto\Team;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains roster information.
 */
class TeamRosterDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['memberList'] = TeamMemberInfoDto::class;
        return $included;
    }


    /**
     *
     * @return TeamMemberInfoDto[}
     */
    public function getMemberList()
    {
        return $this->get('memberList', array());
    }


    /**
     * @param TeamMemberInfoDto[] $memberList
     * @return static
     */
    public function setMemberList(array $memberList)
    {
        return $this->set('memberList', $memberList);
    }

    /**
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->get('ownerId', 0);
    }


    /**
     * @param int $ownerId
     * @return static
     */
    public function setOwnerId(int $ownerId)
    {
        return $this->set('ownerId', $ownerId);
    }


}