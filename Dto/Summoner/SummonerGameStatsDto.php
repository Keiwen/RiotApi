<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Constants\PlayerPosition;
use Keiwen\RiotApi\Constants\PlayerRole;
use Keiwen\RiotApi\Dto\Player\RawStatsDto;


/**
 *
 */
class SummonerGameStatsDto extends RawStatsDto
{

    /**
     * @inheritdoc
     */
    protected static function retrieveFieldToAttributeMap()
    {
        $map = parent::retrieveFieldToAttributeMap();
        $map['barracksKilled'] = 'inhibitorKills';
        $map['championsKilled'] = 'kills';
        $map['level'] = 'champLevel';
        $map['magicDamageDealtPlayer'] = 'magicDamageDealt';
        $map['neutralMinionsKilledYourJungle'] = 'neutralMinionsKilledTeamJungle';
        $map['numDeaths'] = 'deaths';
        $map['physicalDamageDealtPlayer'] = 'physicalDamageDealt';
        $map['sightWardsBought'] = 'sightWardsBoughtInGame';
        $map['trueDamageDealtPlayer'] = 'trueDamageDealt';
        $map['turretsKilled'] = 'towerKills';
        $map['visionWardsBought'] = 'visionWardsBoughtInGame';
        $map['wardKilled'] = 'wardsKilled';
        $map['wardPlaced'] = 'wardsPlaced';
        $map['win'] = 'winner';
        return $map;
    }


    /**
     *
     * @return int
     */
    public function getBountyLevel()
    {
        return $this->get('bountyLevel', 0);
    }


    /**
     * @param int $bountyLevel
     * @return static
     */
    public function setBountyLevel(int $bountyLevel)
    {
        return $this->set('bountyLevel', $bountyLevel);
    }

    /**
     *
     * @return int
     */
    public function getConsumablesPurchased()
    {
        return $this->get('consumablesPurchased', 0);
    }


    /**
     * @param int $consumablesPurchased
     * @return static
     */
    public function setConsumablesPurchased(int $consumablesPurchased)
    {
        return $this->set('consumablesPurchased', $consumablesPurchased);
    }

    /**
     *
     * @return int
     */
    public function getDamageDealtPlayer()
    {
        return $this->get('damageDealtPlayer', 0);
    }


    /**
     * @param int $damageDealtPlayer
     * @return static
     */
    public function setDamageDealtPlayer(int $damageDealtPlayer)
    {
        return $this->set('damageDealtPlayer', $damageDealtPlayer);
    }

    /**
     *
     * @return int
     */
    public function getFirstBlood()
    {
        return $this->get('firstBlood', 0);
    }


    /**
     * @param int $firstBlood
     * @return static
     */
    public function setFirstBlood(int $firstBlood)
    {
        return $this->set('firstBlood', $firstBlood);
    }

    /**
     *
     * @return int
     */
    public function getGold()
    {
        return $this->get('gold', 0);
    }


    /**
     * @param int $gold
     * @return static
     */
    public function setGold(int $gold)
    {
        return $this->set('gold', $gold);
    }

    /**
     *
     * @return int
     */
    public function getItemsPurchased()
    {
        return $this->get('itemsPurchased', 0);
    }


    /**
     * @param int $itemsPurchased
     * @return static
     */
    public function setItemsPurchased(int $itemsPurchased)
    {
        return $this->set('itemsPurchased', $itemsPurchased);
    }

    /**
     * Number of tier 3 items built.
     * @return int
     */
    public function getLegendaryItemsCreated()
    {
        return $this->get('legendaryItemsCreated', 0);
    }


    /**
     * @param int $legendaryItemsCreated
     * @return static
     */
    public function setLegendaryItemsCreated(int $legendaryItemsCreated)
    {
        return $this->set('legendaryItemsCreated', $legendaryItemsCreated);
    }

    /**
     *
     * @return int
     */
    public function getMinionsDenied()
    {
        return $this->get('minionsDenied', 0);
    }


    /**
     * @param int $minionsDenied
     * @return static
     */
    public function setMinionsDenied(int $minionsDenied)
    {
        return $this->set('minionsDenied', $minionsDenied);
    }

    /**
     * Flag specifying if the summoner got the killing blow on the nexus.
     * @return bool
     */
    public function getNexusKilled()
    {
        return $this->get('nexusKilled', false);
    }


    /**
     * @param bool $nexusKilled
     * @return static
     */
    public function setNexusKilled(bool $nexusKilled)
    {
        return $this->set('nexusKilled', $nexusKilled);
    }

    /**
     *
     * @return int
     */
    public function getNumItemsBought()
    {
        return $this->get('numItemsBought', 0);
    }


    /**
     * @param int $numItemsBought
     * @return static
     */
    public function setNumItemsBought(int $numItemsBought)
    {
        return $this->set('numItemsBought', $numItemsBought);
    }

    /**
     * Player position
     * (Legal values: TOP(1), MIDDLE(2), JUNGLE(3), BOT(4))
     * @return int
     */
    public function getPlayerPosition()
    {
        return $this->get('playerPosition', PlayerPosition::MIDDLE);
    }


    /**
     * @param int $playerPosition
     * @return static
     */
    public function setPlayerPosition(int $playerPosition)
    {
        return $this->set('playerPosition', $playerPosition);
    }

    /**
     * Player role
     * (Legal values: DUO(1), SUPPORT(2), CARRY(3), SOLO(4))
     * @return int
     */
    public function getPlayerRole()
    {
        return $this->get('playerRole', PlayerRole::SOLO);
    }


    /**
     * @param int $playerRole
     * @return static
     */
    public function setPlayerRole(int $playerRole)
    {
        return $this->set('playerRole', $playerRole);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore0()
    {
        return $this->get('playerScore0', 0);
    }


    /**
     * @param int $playerScore0
     * @return static
     */
    public function setPlayerScore0(int $playerScore0)
    {
        return $this->set('playerScore0', $playerScore0);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore1()
    {
        return $this->get('playerScore1', 0);
    }


    /**
     * @param int $playerScore1
     * @return static
     */
    public function setPlayerScore1(int $playerScore1)
    {
        return $this->set('playerScore1', $playerScore1);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore2()
    {
        return $this->get('playerScore2', 0);
    }


    /**
     * @param int $playerScore2
     * @return static
     */
    public function setPlayerScore2(int $playerScore2)
    {
        return $this->set('playerScore2', $playerScore2);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore3()
    {
        return $this->get('playerScore3', 0);
    }


    /**
     * @param int $playerScore3
     * @return static
     */
    public function setPlayerScore3(int $playerScore3)
    {
        return $this->set('playerScore3', $playerScore3);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore4()
    {
        return $this->get('playerScore4', 0);
    }


    /**
     * @param int $playerScore4
     * @return static
     */
    public function setPlayerScore4(int $playerScore4)
    {
        return $this->set('playerScore4', $playerScore4);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore5()
    {
        return $this->get('playerScore5', 0);
    }


    /**
     * @param int $playerScore5
     * @return static
     */
    public function setPlayerScore5(int $playerScore5)
    {
        return $this->set('playerScore5', $playerScore5);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore6()
    {
        return $this->get('playerScore6', 0);
    }


    /**
     * @param int $playerScore6
     * @return static
     */
    public function setPlayerScore6(int $playerScore6)
    {
        return $this->set('playerScore6', $playerScore6);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore7()
    {
        return $this->get('playerScore7', 0);
    }


    /**
     * @param int $playerScore7
     * @return static
     */
    public function setPlayerScore7(int $playerScore7)
    {
        return $this->set('playerScore7', $playerScore7);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore8()
    {
        return $this->get('playerScore8', 0);
    }


    /**
     * @param int $playerScore8
     * @return static
     */
    public function setPlayerScore8(int $playerScore8)
    {
        return $this->set('playerScore8', $playerScore8);
    }

    /**
     *
     * @return int
     */
    public function getPlayerScore9()
    {
        return $this->get('playerScore9', 0);
    }


    /**
     * @param int $playerScore9
     * @return static
     */
    public function setPlayerScore9(int $playerScore9)
    {
        return $this->set('playerScore9', $playerScore9);
    }

    /**
     * Number of times first champion spell was cast.
     * @return int
     */
    public function getSpell1Cast()
    {
        return $this->get('spell1Cast', 0);
    }


    /**
     * @param int $spell1Cast
     * @return static
     */
    public function setSpell1Cast(int $spell1Cast)
    {
        return $this->set('spell1Cast', $spell1Cast);
    }

    /**
     * Number of times second champion spell was cast.
     * @return int
     */
    public function getSpell2Cast()
    {
        return $this->get('spell2Cast', 0);
    }


    /**
     * @param int $spell2Cast
     * @return static
     */
    public function setSpell2Cast(int $spell2Cast)
    {
        return $this->set('spell2Cast', $spell2Cast);
    }

    /**
     * Number of times third champion spell was cast.
     * @return int
     */
    public function getSpell3Cast()
    {
        return $this->get('spell3Cast', 0);
    }


    /**
     * @param int $spell3Cast
     * @return static
     */
    public function setSpell3Cast(int $spell3Cast)
    {
        return $this->set('spell3Cast', $spell3Cast);
    }

    /**
     * Number of times fourth champion spell was cast.
     * @return int
     */
    public function getSpell4Cast()
    {
        return $this->get('spell4Cast', 0);
    }


    /**
     * @param int $spell4Cast
     * @return static
     */
    public function setSpell4Cast(int $spell4Cast)
    {
        return $this->set('spell4Cast', $spell4Cast);
    }

    /**
     *
     * @return int
     */
    public function getSummonSpell1Cast()
    {
        return $this->get('summonSpell1Cast', 0);
    }


    /**
     * @param int $summonSpell1Cast
     * @return static
     */
    public function setSummonSpell1Cast(int $summonSpell1Cast)
    {
        return $this->set('summonSpell1Cast', $summonSpell1Cast);
    }

    /**
     *
     * @return int
     */
    public function getSummonSpell2Cast()
    {
        return $this->get('summonSpell2Cast', 0);
    }


    /**
     * @param int $summonSpell2Cast
     * @return static
     */
    public function setSummonSpell2Cast(int $summonSpell2Cast)
    {
        return $this->set('summonSpell2Cast', $summonSpell2Cast);
    }

    /**
     *
     * @return int
     */
    public function getSuperMonsterKilled()
    {
        return $this->get('superMonsterKilled', 0);
    }


    /**
     * @param int $superMonsterKilled
     * @return static
     */
    public function setSuperMonsterKilled(int $superMonsterKilled)
    {
        return $this->set('superMonsterKilled', $superMonsterKilled);
    }

    /**
     *
     * @return int
     */
    public function getTeam()
    {
        return $this->get('team', 0);
    }


    /**
     * @param int $team
     * @return static
     */
    public function setTeam(int $team)
    {
        return $this->set('team', $team);
    }

    /**
     *
     * @return int
     */
    public function getTimePlayed()
    {
        return $this->get('timePlayed', 0);
    }


    /**
     * @param int $timePlayed
     * @return static
     */
    public function setTimePlayed(int $timePlayed)
    {
        return $this->set('timePlayed', $timePlayed);
    }

    /**
     *
     * @return int
     */
    public function getVictoryPointTotal()
    {
        return $this->get('victoryPointTotal', 0);
    }


    /**
     * @param int $victoryPointTotal
     * @return static
     */
    public function setVictoryPointTotal(int $victoryPointTotal)
    {
        return $this->set('victoryPointTotal', $victoryPointTotal);
    }



}