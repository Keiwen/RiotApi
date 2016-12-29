<?php

namespace Keiwen\RiotApi\Dto\Spell;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains summoner spell list data.
 */
class SummonerSpellListDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['data'] = SummonerSpellDto::class;
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
     * Map[string,SummonerSpellDto]
     * @return SummonerSpellDto[]
     */
    public function getData()
    {
        return $this->get('data', array());
    }


    /**
     * @param SummonerSpellDto[] $data
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