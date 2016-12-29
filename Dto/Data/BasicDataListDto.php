<?php

namespace Keiwen\RiotApi\Dto\Data;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains basic data list data.
 */
class BasicDataListDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['basic'] = BasicDataDto::class;
        $included['data'] = BasicDataDto::class;
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
     *
     * @return BasicDataDto
     */
    public function getBasic()
    {
        return $this->get('basic', new BasicDataDto());
    }


    /**
     * @param BasicDataDto $basic
     * @return static
     */
    public function setBasic(BasicDataDto $basic)
    {
        return $this->set('basic', $basic);
    }

    /**
     * Map[string,BasicDataDto]
     * @return BasicDataDto[]
     */
    public function getData()
    {
        return $this->get('data', array());
    }


    /**
     * @param BasicDataDto[] $data
     * @return static
     */
    public function setData($data)
    {
        if(empty($data)) $data= array();
        return $this->set('data', $data);
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