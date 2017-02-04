<?php

namespace Keiwen\RiotApi\Dto\Item;
use Keiwen\RiotApi\Dto\Data\BasicDataListDto;


/**
 * This object contains item list data.
 */
class ItemListDto extends BasicDataListDto
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['data'] = ItemDto::class;
        $included['groups'] = ItemGroupDto::class;
        $included['tree'] = ItemTreeDto::class;
        return $included;
    }

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjectMapList()
    {
        $included = parent::includedJsonObjectMapList();
        $included[] = 'data';
        $included[] = 'groups';
        $included[] = 'tree';
        return $included;
    }




    /**
     * Map[string, ItemDto]
     * @return ItemDto[]
     */
    public function getData()
    {
        return $this->get('data', array());
    }


    /**
     * @param ItemDto[] $data
     * @return static
     */
    public function setData(array $data)
    {
        return $this->set('data', $data);
    }

    /**
     *
     * @return ItemGroupDto[]
     */
    public function getGroups()
    {
        return $this->get('groups', array());
    }


    /**
     * @param ItemGroupDto[] $groups
     * @return static
     */
    public function setGroups(array $groups)
    {
        return $this->set('groups', $groups);
    }

    /**
     *
     * @return ItemTreeDto[]
     */
    public function getTree()
    {
        return $this->get('tree', array());
    }


    /**
     * @param ItemTreeDto[] $tree
     * @return static
     */
    public function setTree(array $tree)
    {
        return $this->set('tree', $tree);
    }


}