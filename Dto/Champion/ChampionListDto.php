<?php

namespace Keiwen\RiotApi\Dto\Champion;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains champion list data.
 */
class ChampionListDto extends DtoParent
{



    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['data'] = ChampionDto::class;
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
     * @return ChampionDto[]
     */
    public function getData()
    {
        return $this->get('data', array());
    }


    /**
     * @param ChampionDto[] $data
     * @return static
     */
    public function setData($data)
    {
        if(empty($data)) $data = array();
        return $this->set('data', $data);
    }

    /**
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->get('format', '');
    }


    /**
     * @param string $format
     * @return static
     */
    public function setFormat(string $format)
    {
        return $this->set('format', $format);
    }

    /**
     * @return array
     */
    public function getKeys()
    {
        return $this->get('keys', array());
    }


    /**
     * @param array $keys
     * @return static
     */
    public function setKeys(array $keys)
    {
        return $this->set('keys', $keys);
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