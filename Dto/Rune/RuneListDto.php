<?php

namespace Keiwen\RiotApi\Dto\Rune;
use Keiwen\RiotApi\Dto\Data\BasicDataListDto;


/**
 * This object contains rune list data.
 */
class RuneListDto extends BasicDataListDto
{



    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['data'] = RuneDto::class;
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
     * Map[string,RuneDto]
     * @return RuneDto[]
     */
    public function getData()
    {
        return $this->get('data', array());
    }


    /**
     * @param RuneDto[] $data
     * @return static
     */
    public function setData($data)
    {
        if(empty($data)) $data = array();
        return $this->set('data', $data);
    }


}