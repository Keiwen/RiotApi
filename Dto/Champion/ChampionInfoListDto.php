<?php

namespace Keiwen\RiotApi\Dto\Champion;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains a collection of champion information.
 */
class ChampionInfoListDto extends DtoParent
{



    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['champions'] = ChampionInfoDto::class;
        return $included;
    }



    /**
     * @return ChampionInfoDto[]
     */
    public function getChampions()
    {
        return $this->get('champions', array());
    }


    /**
     * @param ChampionInfoDto[] $champions
     * @return static
     */
    public function setChampions($champions)
    {
        if(empty($champions)) $champions = array();
        return $this->set('champions', $champions);
    }


}