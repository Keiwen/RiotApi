<?php

namespace Keiwen\RiotApi\Dto\Match;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains team stats information
 */
class MatchTeamStatsDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['bans'] = BannedChampionDto::class;
        return $included;
    }

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjectMapList()
    {
        $included = parent::includedJsonObjectMapList();
        $included[] = 'bans';
        return $included;
    }


    /**
     * If game was draft mode, contains banned champion data, otherwise null
     * @return BannedChampionDto[]
     */
    public function getBans()
    {
        return $this->get('bans', array());
    }


    /**
     * @param BannedChampionDto[] $bans
     * @return static
     */
    public function setBans(array $bans)
    {
        return $this->set('bans', $bans);
    }

    /**
     * Number of times the team killed baron
     * @return int
     */
    public function getBaronKills()
    {
        return $this->get('baronKills', 0);
    }


    /**
     * @param int $baronKills
     * @return static
     */
    public function setBaronKills(int $baronKills)
    {
        return $this->set('baronKills', $baronKills);
    }

    /**
     * If game was a dominion game, specifies the points the team had at game end, otherwise null
     * @return int
     */
    public function getDominionVictoryScore()
    {
        return $this->get('dominionVictoryScore', 0);
    }


    /**
     * @param int $dominionVictoryScore
     * @return static
     */
    public function setDominionVictoryScore(int $dominionVictoryScore)
    {
        return $this->set('dominionVictoryScore', $dominionVictoryScore);
    }

    /**
     * Number of times the team killed dragon
     * @return int
     */
    public function getDragonKills()
    {
        return $this->get('dragonKills', 0);
    }


    /**
     * @param int $dragonKills
     * @return static
     */
    public function setDragonKills(int $dragonKills)
    {
        return $this->set('dragonKills', $dragonKills);
    }

    /**
     * Flag indicating whether or not the team got the first baron kill
     * @return bool
     */
    public function getFirstBaron()
    {
        return $this->get('firstBaron', false);
    }


    /**
     * @param bool $firstBaron
     * @return static
     */
    public function setFirstBaron(bool $firstBaron)
    {
        return $this->set('firstBaron', $firstBaron);
    }

    /**
     * Flag indicating whether or not the team got first blood
     * @return bool
     */
    public function getFirstBlood()
    {
        return $this->get('firstBlood', false);
    }


    /**
     * @param bool $firstBlood
     * @return static
     */
    public function setFirstBlood(bool $firstBlood)
    {
        return $this->set('firstBlood', $firstBlood);
    }

    /**
     * Flag indicating whether or not the team got the first dragon kill
     * @return bool
     */
    public function getFirstDragon()
    {
        return $this->get('firstDragon', false);
    }


    /**
     * @param bool $firstDragon
     * @return static
     */
    public function setFirstDragon(bool $firstDragon)
    {
        return $this->set('firstDragon', $firstDragon);
    }

    /**
     * Flag indicating whether or not the team destroyed the first inhibitor
     * @return bool
     */
    public function getFirstInhibitor()
    {
        return $this->get('firstInhibitor', false);
    }


    /**
     * @param bool $firstInhibitor
     * @return static
     */
    public function setFirstInhibitor(bool $firstInhibitor)
    {
        return $this->set('firstInhibitor', $firstInhibitor);
    }

    /**
     * Flag indicating whether or not the team got the first rift herald kill
     * @return bool
     */
    public function getFirstRiftHerald()
    {
        return $this->get('firstRiftHerald', false);
    }


    /**
     * @param bool $firstRiftHerald
     * @return static
     */
    public function setFirstRiftHerald(bool $firstRiftHerald)
    {
        return $this->set('firstRiftHerald', $firstRiftHerald);
    }

    /**
     * Flag indicating whether or not the team destroyed the first tower
     * @return bool
     */
    public function getFirstTower()
    {
        return $this->get('firstTower', false);
    }


    /**
     * @param bool $firstTower
     * @return static
     */
    public function setFirstTower(bool $firstTower)
    {
        return $this->set('firstTower', $firstTower);
    }

    /**
     * Number of inhibitors the team destroyed
     * @return int
     */
    public function getInhibitorKills()
    {
        return $this->get('inhibitorKills', 0);
    }


    /**
     * @param int $inhibitorKills
     * @return static
     */
    public function setInhibitorKills(int $inhibitorKills)
    {
        return $this->set('inhibitorKills', $inhibitorKills);
    }

    /**
     * Number of times the team killed rift herald
     * @return int
     */
    public function getRiftHeraldKills()
    {
        return $this->get('riftHeraldKills', 0);
    }


    /**
     * @param int $riftHeraldKills
     * @return static
     */
    public function setRiftHeraldKills(int $riftHeraldKills)
    {
        return $this->set('riftHeraldKills', $riftHeraldKills);
    }

    /**
     * Team ID
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
     * Number of towers the team destroyed
     * @return int
     */
    public function getTowerKills()
    {
        return $this->get('towerKills', 0);
    }


    /**
     * @param int $towerKills
     * @return static
     */
    public function setTowerKills(int $towerKills)
    {
        return $this->set('towerKills', $towerKills);
    }

    /**
     * Number of times the team killed vilemaw
     * @return int
     */
    public function getVilemawKills()
    {
        return $this->get('vilemawKills', 0);
    }


    /**
     * @param int $vilemawKills
     * @return static
     */
    public function setVilemawKills(int $vilemawKills)
    {
        return $this->set('vilemawKills', $vilemawKills);
    }

    /**
     * Flag indicating whether or not the team won
     * @return bool
     */
    public function getWinner()
    {
        return $this->get('winner', false);
    }


    /**
     * @param bool $winner
     * @return static
     */
    public function setWinner(bool $winner)
    {
        return $this->set('winner', $winner);
    }



}