<?php

namespace Keiwen\RiotApi\Dto\Match;
use Keiwen\RiotApi\Constants\MatchEventType;
use Keiwen\RiotApi\Constants\MonsterType;
use Keiwen\RiotApi\Constants\TowerType;
use Keiwen\RiotApi\Constants\WardType;
use Keiwen\RiotApi\Dto\Data\PositionDto;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains game event information.
 * Note that not all legal type values documented below are valid for all games.
 * Event data evolves over time and certain values may be relevant only for older or newer games.
 */
class MatchEventDto extends DtoParent
{

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['position'] = PositionDto::class;
        return $included;
    }


    /**
     * The ascended type of the event. Only present if relevant.
     * Note that CLEAR_ASCENDED refers to when a participants kills the ascended player.
     * (Legal values: CHAMPION_ASCENDED, CLEAR_ASCENDED, MINION_ASCENDED)
     * @return string
     */
    public function getAscendedType()
    {
        return $this->get('ascendedType', 'CHAMPION_ASCENDED');
    }


    /**
     * @param string $ascendedType
     * @return static
     */
    public function setAscendedType(string $ascendedType)
    {
        return $this->set('ascendedType', $ascendedType);
    }


    /**
     * The assisting participant IDs of the event. Only present if relevant.
     * @return int[]
     */
    public function getAssistingParticipantIds()
    {
        return $this->get('assistingParticipantIds', array());
    }


    /**
     * @param int[] $assistingParticipantIds
     * @return static
     */
    public function setAssistingParticipantIds(array $assistingParticipantIds)
    {
        return $this->set('assistingParticipantIds', $assistingParticipantIds);
    }

    /**
     * The building type of the event. Only present if relevant.
     * (Legal values: INHIBITOR_BUILDING, TOWER_BUILDING)
     * @return string
     */
    public function getBuildingType()
    {
        return $this->get('buildingType', 'TOWER_BUILDING');
    }


    /**
     * @param string $buildingType
     * @return static
     */
    public function setBuildingType(string $buildingType)
    {
        return $this->set('buildingType', $buildingType);
    }

    /**
     * The creator ID of the event. Only present if relevant.
     * @return int
     */
    public function getCreatorId()
    {
        return $this->get('creatorId', 0);
    }


    /**
     * @param int $creatorId
     * @return static
     */
    public function setCreatorId(int $creatorId)
    {
        return $this->set('creatorId', $creatorId);
    }


    /**
     * Event type.
     * (Legal values: ASCENDED_EVENT, BUILDING_KILL, CAPTURE_POINT, CHAMPION_KILL,
     * ELITE_MONSTER_KILL, ITEM_DESTROYED, ITEM_PURCHASED, ITEM_SOLD, ITEM_UNDO,
     * PORO_KING_SUMMON, SKILL_LEVEL_UP, WARD_KILL, WARD_PLACED)
     * @return string
     */
    public function getEventType()
    {
        return $this->get('eventType', MatchEventType::CHAMPION_KILL);
    }


    /**
     * @param string $eventType
     * @return static
     */
    public function setEventType(string $eventType)
    {
        return $this->set('eventType', $eventType);
    }

    /**
     * The ending item ID of the event. Only present if relevant.
     * @return int
     */
    public function getItemAfter()
    {
        return $this->get('itemAfter', 0);
    }


    /**
     * @param int $itemAfter
     * @return static
     */
    public function setItemAfter(int $itemAfter)
    {
        return $this->set('itemAfter', $itemAfter);
    }

    /**
     * The starting item ID of the event. Only present if relevant.
     * @return int
     */
    public function getItemBefore()
    {
        return $this->get('itemBefore', 0);
    }


    /**
     * @param int $itemBefore
     * @return static
     */
    public function setItemBefore(int $itemBefore)
    {
        return $this->set('itemBefore', $itemBefore);
    }

    /**
     * The item ID of the event. Only present if relevant.
     * @return int
     */
    public function getItemId()
    {
        return $this->get('itemId', 0);
    }


    /**
     * @param int $itemId
     * @return static
     */
    public function setItemId(int $itemId)
    {
        return $this->set('itemId', $itemId);
    }

    /**
     * The killer ID of the event. Only present if relevant.
     * Killer ID 0 indicates a minion.
     * @return int
     */
    public function getKillerId()
    {
        return $this->get('killerId', 0);
    }


    /**
     * @param int $killerId
     * @return static
     */
    public function setKillerId(int $killerId)
    {
        return $this->set('killerId', $killerId);
    }

    /**
     * The lane type of the event. Only present if relevant.
     * (Legal values: BOT_LANE, MID_LANE, TOP_LANE)
     * @return string
     */
    public function getLaneType()
    {
        return $this->get('laneType', 'MID_LANE');
    }


    /**
     * @param string $laneType
     * @return static
     */
    public function setLaneType(string $laneType)
    {
        return $this->set('laneType', $laneType);
    }

    /**
     * The level up type of the event. Only present if relevant.
     * (Legal values: EVOLVE, NORMAL)
     * @return string
     */
    public function getLevelUpType()
    {
        return $this->get('levelUpType', 'NORMAL');
    }


    /**
     * @param string $levelUpType
     * @return static
     */
    public function setLevelUpType(string $levelUpType)
    {
        return $this->set('levelUpType', $levelUpType);
    }


    /**
     * The monster type of the event. Only present if relevant.
     * (Legal values: BARON_NASHOR, BLUE_GOLEM, DRAGON, RED_LIZARD, RIFTHERALD, VILEMAW)
     * @return string
     */
    public function getMonsterType()
    {
        return $this->get('monsterType', MonsterType::BARON_NASHOR);
    }


    /**
     * @param string $monsterType
     * @return static
     */
    public function setMonsterType(string $monsterType)
    {
        return $this->set('monsterType', $monsterType);
    }

    /**
     * The participant ID of the event. Only present if relevant.
     * @return int
     */
    public function getParticipantId()
    {
        return $this->get('participantId', 0);
    }


    /**
     * @param int $participantId
     * @return static
     */
    public function setParticipantId(int $participantId)
    {
        return $this->set('participantId', $participantId);
    }


    /**
     * The point captured in the event. Only present if relevant.
     * (Legal values: POINT_A, POINT_B, POINT_C, POINT_D, POINT_E)
     * @return string
     */
    public function getPointCaptured()
    {
        return $this->get('pointCaptured', 'POINT_A');
    }


    /**
     * @param string $pointCaptured
     * @return static
     */
    public function setPointCaptured(string $pointCaptured)
    {
        return $this->set('pointCaptured', $pointCaptured);
    }

    /**
     * The position of the event. Only present if relevant.
     * @return PositionDto
     */
    public function getPosition()
    {
        return $this->get('position', new PositionDto());
    }


    /**
     * @param PositionDto $position
     * @return static
     */
    public function setPosition(PositionDto $position)
    {
        return $this->set('position', $position);
    }

    /**
     * The skill slot of the event. Only present if relevant.
     * @return int
     */
    public function getSkillSlot()
    {
        return $this->get('skillSlot', 0);
    }


    /**
     * @param int $skillSlot
     * @return static
     */
    public function setSkillSlot(int $skillSlot)
    {
        return $this->set('skillSlot', $skillSlot);
    }

    /**
     * The team ID of the event. Only present if relevant.
     * @return int
     */
    public function getTeamId()
    {
        return $this->get('teamId', 0);
    }


    /**
     * @param int $teamId
     * @return static
     */
    public function setTeamId(int $teamId)
    {
        return $this->set('teamId', $teamId);
    }

    /**
     * Represents how many milliseconds into the game the event occurred.
     * @return string
     */
    public function getTimestamp()
    {
        return $this->get('timestamp', '0');
    }


    /**
     * @param int $timestamp
     * @return static
     */
    public function setTimestamp($timestamp)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('timestamp', $timestamp);
    }

    /**
     * The tower type of the event. Only present if relevant
     * (Legal values: BASE_TURRET, FOUNTAIN_TURRET, INNER_TURRET, NEXUS_TURRET, OUTER_TURRET, UNDEFINED_TURRET)
     * @return string
     */
    public function getTowerType()
    {
        return $this->get('towerType', TowerType::UNDEFINED_TURRET);
    }


    /**
     * @param string $towerType
     * @return static
     */
    public function setTowerType(string $towerType)
    {
        return $this->set('towerType', $towerType);
    }

    /**
     * The victim ID of the event. Only present if relevant.
     * @return int
     */
    public function getVictimId()
    {
        return $this->get('victimId', 0);
    }


    /**
     * @param int $victimId
     * @return static
     */
    public function setVictimId(int $victimId)
    {
        return $this->set('victimId', $victimId);
    }

    /**
     * The ward type of the event. Only present if relevant.
     * (Legal values: BLUE_TRINKET, SIGHT_WARD, TEEMO_MUSHROOM, UNDEFINED, VISION_WARD, YELLOW_TRINKET, YELLOW_TRINKET_UPGRADE)
     * @return string
     */
    public function getWardType()
    {
        return $this->get('wardType', WardType::UNDEFINED);
    }


    /**
     * @param string $wardType
     * @return static
     */
    public function setWardType(string $wardType)
    {
        return $this->set('wardType', $wardType);
    }



}
