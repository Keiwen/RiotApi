<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains recent games information.
 */
class SummonerGameListDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['games'] = SummonerGameDto::class;
        return $included;
    }



    /**
     * Collection of recent games played (max 10).
     * @return SummonerGameDto[]
     */
    public function getGames()
    {
        return $this->get('games', array());
    }


    /**
     * @param SummonerGameDto[] $games
     * @return static
     */
    public function setGames(array $games)
    {
        return $this->set('games', $games);
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
