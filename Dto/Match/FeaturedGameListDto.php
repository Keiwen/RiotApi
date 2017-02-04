<?php

namespace Keiwen\RiotApi\Dto\Match;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 *
 */
class FeaturedGameListDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['gameList'] = CurrentGameInfoDto::class;
        return $included;
    }

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjectMapList()
    {
        $included = parent::includedJsonObjectMapList();
        $included[] = 'gameList';
        return $included;
    }


    /**
     * The suggested interval to wait before requesting FeaturedGames again
     * @return int
     */
    public function getClientRefreshInterval()
    {
        return $this->get('clientRefreshInterval', 0);
    }

    /**
     * @param int $clientRefreshInterval
     * @return static
     */
    public function setClientRefreshInterval(int $clientRefreshInterval) {
        return $this->set('clientRefreshInterval', $clientRefreshInterval);
    }

    
    /**
     * The list of featured games
     * @return CurrentGameInfoDto[]
     */
    public function getGameList()
    {
        return $this->get('gameList', array());
    }

    /**
     * @param CurrentGameInfoDto[] $gameList
     * @return static
     */
    public function setGameList(array $gameList) {
        return $this->set('gameList', $gameList);
    }


}