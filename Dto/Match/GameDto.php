<?php

namespace Keiwen\RiotApi\Dto\Match;
use Keiwen\RiotApi\Constants\GameMode;
use Keiwen\RiotApi\Constants\GameType;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains game information.
 */
class GameDto extends DtoParent
{

    /**
     * @inheritdoc
     */
    protected static function retrieveFieldToAttributeMap()
    {
        $map = parent::retrieveFieldToAttributeMap();
        $map['gameId'] = 'id';
        $map['matchId'] = 'id';
        $map['gameMode'] = 'mode';
        $map['matchMode'] = 'mode';
        $map['gameType'] = 'type';
        $map['matchType'] = 'type';
        return $map;
    }



    /**
     * The ID of the game
     * @return int
     */
    public function getId()
    {
        return $this->get('id', 0);
    }


    /**
     * @param int $id
     * @return static
     */
    public function setId(int $id)
    {
        return $this->set('id', $id);
    }


    /**
     * The game mode
     * (Legal values: CLASSIC, ODIN, ARAM, TUTORIAL, ONEFORALL, ASCENSION, FIRSTBLOOD, KINGPORO)
     * @return string
     */
    public function getMode()
    {
        return $this->get('mode', GameMode::CLASSIC);
    }


    /**
     * @param string $mode
     * @return static
     */
    public function setMode(string $mode)
    {
        return $this->set('mode', $mode);
    }


    /**
     * The game type
     * (Legal values: CUSTOM_GAME, MATCHED_GAME, TUTORIAL_GAME)
     * @return string
     */
    public function getType()
    {
        return $this->get('type', GameType::CUSTOM_GAME);
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
     * The ID of the map
     * @return int
     */
    public function getMapId()
    {
        return $this->get('mapId', 0);
    }


    /**
     * @param int $mapId
     * @return static
     */
    public function setMapId(int $mapId)
    {
        return $this->set('mapId', $mapId);
    }



}