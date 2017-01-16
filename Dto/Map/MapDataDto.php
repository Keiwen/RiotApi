<?php

namespace Keiwen\RiotApi\Dto\Map;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains map data.
 */
class MapDataDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['data'] = MapDetailsDto::class;
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
     * Map[string, MapDetailsDto]
     * @return MapDetailsDto[]
     */
    public function getData()
    {
        return $this->get('data', array());
    }


    /**
     * @param MapDetailsDto[] $data
     * @return static
     */
    public function setData(array $data)
    {
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