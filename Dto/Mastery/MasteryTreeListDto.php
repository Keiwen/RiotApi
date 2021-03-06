<?php

namespace Keiwen\RiotApi\Dto\Mastery;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains mastery tree list data.
 */
class MasteryTreeListDto extends DtoParent
{

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['masteryTreeItems'] = MasteryTreeItemDto::class;
        return $included;
    }

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjectMapList()
    {
        $included = parent::includedJsonObjectMapList();
        $included[] = 'masteryTreeItems';
        return $included;
    }

    /**
     *
     * @return MasteryTreeItemDto[]
     */
    public function getMasteryTreeItems()
    {
        return $this->get('masteryTreeItems', array());
    }


    /**
     * @param MasteryTreeItemDto[] $masteryTreeItems
     * @return static
     */
    public function setMasteryTreeItems(array $masteryTreeItems)
    {
        return $this->set('masteryTreeItems', $masteryTreeItems);
    }



}