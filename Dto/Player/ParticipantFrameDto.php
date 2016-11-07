<?php

namespace Keiwen\RiotApi\Dto\Player;
use Keiwen\RiotApi\Dto\Data\PositionDto;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains participant frame information
 */
class ParticipantFrameDto extends DtoParent
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
     * Participant's current gold
     * @return int
     */
    public function getCurrentGold()
    {
        return $this->get('currentGold', 0);
    }


    /**
     * @param int $currentGold
     * @return static
     */
    public function setCurrentGold(int $currentGold)
    {
        return $this->set('currentGold', $currentGold);
    }

    /**
     * Dominion score of the participant
     * @return int
     */
    public function getDominionScore()
    {
        return $this->get('dominionScore', 0);
    }


    /**
     * @param int $dominionScore
     * @return static
     */
    public function setDominionScore(int $dominionScore)
    {
        return $this->set('dominionScore', $dominionScore);
    }

    /**
     * Number of jungle minions killed by participant
     * @return int
     */
    public function getJungleMinionsKilled()
    {
        return $this->get('jungleMinionsKilled', 0);
    }


    /**
     * @param int $jungleMinionsKilled
     * @return static
     */
    public function setJungleMinionsKilled(int $jungleMinionsKilled)
    {
        return $this->set('jungleMinionsKilled', $jungleMinionsKilled);
    }

    /**
     * Participant's current level
     * @return int
     */
    public function getLevel()
    {
        return $this->get('level', 0);
    }


    /**
     * @param int $level
     * @return static
     */
    public function setLevel(int $level)
    {
        return $this->set('level', $level);
    }

    /**
     * Number of minions killed by participant
     * @return int
     */
    public function getMinionsKilled()
    {
        return $this->get('minionsKilled', 0);
    }


    /**
     * @param int $minionsKilled
     * @return static
     */
    public function setMinionsKilled(int $minionsKilled)
    {
        return $this->set('minionsKilled', $minionsKilled);
    }

    /**
     * Participant ID
     * @return string
     */
    public function getParticipantId()
    {
        return $this->get('participantId', '0');
    }


    /**
     * @param int $participantId
     * @return static
     */
    public function setParticipantId($participantId)
    {
        //if int to large, turned to float, so always turned to string
        return $this->set('participantId', ''.$participantId);
    }

    /**
     * Participant's position
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
     * Team score of the participant
     * @return int
     */
    public function getTeamScore()
    {
        return $this->get('teamScore', 0);
    }


    /**
     * @param int $teamScore
     * @return static
     */
    public function setTeamScore(int $teamScore)
    {
        return $this->set('teamScore', $teamScore);
    }

    /**
     * Participant's total gold
     * @return int
     */
    public function getTotalGold()
    {
        return $this->get('totalGold', 0);
    }


    /**
     * @param int $totalGold
     * @return static
     */
    public function setTotalGold(int $totalGold)
    {
        return $this->set('totalGold', $totalGold);
    }

    /**
     * Experience earned by participant
     * @return int
     */
    public function getXp()
    {
        return $this->get('xp', 0);
    }


    /**
     * @param int $xp
     * @return static
     */
    public function setXp(int $xp)
    {
        return $this->set('xp', $xp);
    }



}
