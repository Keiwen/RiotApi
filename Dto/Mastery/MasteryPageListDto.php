<?php

namespace Keiwen\RiotApi\Dto\Mastery;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains masteries information.
 */
class MasteryPageListDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['pages'] = MasteryPageDto::class;
        return $included;
    }


    /**
     * Collection of mastery pages associated with the summoner.
     * @return MasteryPageDto[]
     */
    public function getPages()
    {
        return $this->get('pages', array());
    }


    /**
     * @param MasteryPageDto[] $pages
     * @return static
     */
    public function setPages(array $pages)
    {
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