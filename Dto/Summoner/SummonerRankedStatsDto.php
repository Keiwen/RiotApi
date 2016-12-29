<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains ranked stats information.
 */
class SummonerRankedStatsDto extends DtoParent
{

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['champions'] = SummonerChampionStatsDto::class;
        return $included;
    }


    /**
     * Collection of aggregated stats summarized by champion.
     * @return SummonerChampionStatsDto[]
     */
    public function getChampions()
    {
        return $this->get('champions', array());
    }


    /**
     * @param SummonerChampionStatsDto[] $champions
     * @return static
     */
    public function setChampions($champions)
    {
        if(empty($champions)) $champions = array();
        return $this->set('champions', $champions);
    }

    /**
     * Date stats were last modified specified as epoch milliseconds.
     * @return string
     */
    public function getModifyDate()
    {
        return $this->get('modifyDate', '0');
    }


    /**
     * @param int $modifyDate
     * @return static
     */
    public function setModifyDate($modifyDate)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('modifyDate', ''.$modifyDate);
    }

    /**
     * Summoner ID.
     * @return string
     */
    public function getSummonerId()
    {
        return $this->get('summonerId', '0');
    }


    /**
     * @param int $summonerId
     * @return static
     */
    public function setSummonerId($summonerId)
    {
        //if int to large, turned to float, so always turned to string
        return $this->set('summonerId', ''.$summonerId);
    }


}
