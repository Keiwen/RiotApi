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
     * @inheritdoc
     */
    protected static function includedJsonObjectMapList()
    {
        $included = parent::includedJsonObjectMapList();
        $included[] = 'memberList';
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
     * @return string
     */
    public function getOwnerId()
    {
        return $this->get('ownerId', '0');
    }


    /**
     * @param int $ownerId
     * @return static
     */
    public function setOwnerId($ownerId)
    {
        //if int to large, turned to float, so always turned to string
        return $this->set('ownerId', ''.$ownerId);
    }


}
