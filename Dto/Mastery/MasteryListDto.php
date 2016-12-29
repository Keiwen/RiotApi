<?php

namespace Keiwen\RiotApi\Dto\Mastery;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains mastery list data.
 */
class MasteryListDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['data'] = MasteryDto::class;
        $included['tree'] = MasteryTreeDto::class;
        return $included;
    }

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjectMapList()
    {
        $included = parent::includedJsonObjectMapList();
        $included[] = 'data';
        return $included;
    }



    /**
     * Map[string,MasteryDto]
     * @return MasteryDto[]
     */
    public function getData()
    {
        return $this->get('data', array());
    }


    /**
     * @param MasteryDto[] $data
     * @return static
     */
    public function setData($data)
    {
        if(empty($data)) $data = array();
        return $this->set('data', $data);
    }

    /**
     *
     * @return MasteryTreeDto
     */
    public function getTree()
    {
        return $this->get('tree', new MasteryTreeDto);
    }


    /**
     * @param MasteryTreeDto $tree
     * @return static
     */
    public function setTree(MasteryTreeDto $tree)
    {
        return $this->set('tree', $tree);
    }

    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->get('type', '');
    }


    /**
     * @param string $type
     * @return static
     */
    public function setType(string $type)
    {
        return $this->set('type', $type);
    }

    /**
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->get('version', '');
    }


    /**
     * @param string $version
     * @return static
     */
    public function setVersion(string $version)
    {
        return $this->set('version', $version);
    }


}