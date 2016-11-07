<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Constants\GameSubType;
use Keiwen\RiotApi\Dto\Match\GameDto;
use Keiwen\RiotApi\Dto\Player\PlayerFellowDto;


/**
 * This object contains a player game information.
 */
class SummonerGameDto extends GameDto
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['fellowPlayers'] = PlayerFellowDto::class;
        $included['stats'] = SummonerGameStatsDto::class;
        return $included;
    }


    /**
     * Champion ID associated with game.
     * @return int
     */
    public function getChampionId()
    {
        return $this->get('championId', 0);
    }


    /**
     * @param int $championId
     * @return static
     */
    public function setChampionId(int $championId)
    {
        return $this->set('championId', $championId);
    }


    /**
     * Date that end game data was recorded, specified as epoch milliseconds.
     * @return string
     */
    public function getCreateDate()
    {
        return $this->get('createDate', '0');
    }


    /**
     * @param int $createDate
     * @return static
     */
    public function setCreateDate($createDate)
    {
        //if int to large (millisec timestamp), turned to float, so always turned to string
        return $this->set('createDate', ''.$createDate);
    }


    /**
     * Other players associated with the game.
     * @return PlayerFellowDto[]
     */
    public function getFellowPlayers()
    {
        return $this->get('fellowPlayers', array());
    }


    /**
     * @param PlayerFellowDto[] $fellowPlayers
     * @return static
     */
    public function setFellowPlayers(array $fellowPlayers)
    {
        return $this->set('fellowPlayers', $fellowPlayers);
    }

    /**
     * Invalid flag.
     * @return bool
     */
    public function getInvalid()
    {
        return $this->get('invalid', false);
    }


    /**
     * @param bool $invalid
     * @return static
     */
    public function setInvalid(bool $invalid)
    {
        return $this->set('invalid', $invalid);
    }


    /**
     * IP Earned.
     * @return int
     */
    public function getIpEarned()
    {
        return $this->get('ipEarned', 0);
    }


    /**
     * @param int $ipEarned
     * @return static
     */
    public function setIpEarned(int $ipEarned)
    {
        return $this->set('ipEarned', $ipEarned);
    }


    /**
     * Level.
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
     * ID of first summoner spell.
     * @return int
     */
    public function getSpell1()
    {
        return $this->get('spell1', 0);
    }


    /**
     * @param int $spell1
     * @return static
     */
    public function setSpell1(int $spell1)
    {
        return $this->set('spell1', $spell1);
    }


    /**
     * ID of second summoner spell.
     * @return int
     */
    public function getSpell2()
    {
        return $this->get('spell2', 0);
    }


    /**
     * @param int $spell2
     * @return static
     */
    public function setSpell2(int $spell2)
    {
        return $this->set('spell2', $spell2);
    }


    /**
     * Statistics associated with the game for this summoner.
     * @return SummonerGameStatsDto
     */
    public function getStats()
    {
        return $this->get('stats', new SummonerGameStatsDto());
    }


    /**
     * @param SummonerGameStatsDto $stats
     * @return static
     */
    public function setStats(SummonerGameStatsDto $stats)
    {
        return $this->set('stats', $stats);
    }


    /**
     * Game sub-type.
     * (Legal values: NONE, NORMAL, BOT, RANKED_SOLO_5x5, RANKED_PREMADE_3x3, RANKED_PREMADE_5x5,
     * ODIN_UNRANKED, RANKED_TEAM_3x3, RANKED_TEAM_5x5, NORMAL_3x3, BOT_3x3, CAP_5x5, ARAM_UNRANKED_5x5,
     * ONEFORALL_5x5, FIRSTBLOOD_1x1, FIRSTBLOOD_2x2, SR_6x6, URF, URF_BOT, NIGHTMARE_BOT, ASCENSION,
     * HEXAKILL, KING_PORO, COUNTER_PICK, BILGEWATER)
     * @return string
     */
    public function getSubType()
    {
        return $this->get('subType', GameSubType::NONE);
    }


    /**
     * @param string $subType
     * @return static
     */
    public function setSubType(string $subType)
    {
        return $this->set('subType', $subType);
    }


    /**
     * Team ID associated with game. Team ID 100 is blue team. Team ID 200 is purple team.
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


}
