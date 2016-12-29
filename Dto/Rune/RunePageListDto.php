<?php

namespace Keiwen\RiotApi\Dto\Rune;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains masteries information.
 */
class RunePageListDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['pages'] = RunePageDto::class;
        return $included;
    }


    /**
     * Collection of mastery pages associated with the summoner.
     * @return RunePageDto[]
     */
    public function getPages()
    {
        return $this->get('pages', array());
    }


    /**
     * @param RunePageDto[] $pages
     * @return static
     */
    public function setPages($pages)
    {
        if(empty($pages)) $pages = array();
        return $this->set('pages', $pages);
    }

    /**
     * Summoner ID.
     * @return int
     */
    public function getSummonerId()
    {
        return $this->get('summonerId', 0);
    }


    /**
     * @param int $summonerId
     * @return static
     */
    public function setSummonerId(int $summonerId)
    {
        return $this->set('summonerId', $summonerId);
    }


}