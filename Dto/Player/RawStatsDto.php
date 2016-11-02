<?php

namespace Keiwen\RiotApi\Dto\Player;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains raw statistics
 */
class RawStatsDto extends DtoParent
{


    /**
     * Number of assists
     * @return int
     */
    public function getAssists()
    {
        return $this->get('assists', 0);
    }


    /**
     * @param int $assists
     * @return static
     */
    public function setAssists(int $assists)
    {
        return $this->set('assists', $assists);
    }

    /**
     * Champion level achieved
     * @return int
     */
    public function getChampLevel()
    {
        return $this->get('champLevel', 0);
    }


    /**
     * @param int $champLevel
     * @return static
     */
    public function setChampLevel(int $champLevel)
    {
        return $this->set('champLevel', $champLevel);
    }

    /**
     * If game was a dominion game, player's combat score, otherwise 0
     * @return int
     */
    public function getCombatPlayerScore()
    {
        return $this->get('combatPlayerScore', 0);
    }


    /**
     * @param int $combatPlayerScore
     * @return static
     */
    public function setCombatPlayerScore(int $combatPlayerScore)
    {
        return $this->set('combatPlayerScore', $combatPlayerScore);
    }

    /**
     * Number of deaths
     * @return int
     */
    public function getDeaths()
    {
        return $this->get('deaths', 0);
    }


    /**
     * @param int $deaths
     * @return static
     */
    public function setDeaths(int $deaths)
    {
        return $this->set('deaths', $deaths);
    }

    /**
     * Number of double kills
     * @return int
     */
    public function getDoubleKills()
    {
        return $this->get('doubleKills', 0);
    }


    /**
     * @param int $doubleKills
     * @return static
     */
    public function setDoubleKills(int $doubleKills)
    {
        return $this->set('doubleKills', $doubleKills);
    }

    /**
     * Gold earned
     * @return int
     */
    public function getGoldEarned()
    {
        return $this->get('goldEarned', 0);
    }


    /**
     * @param int $goldEarned
     * @return static
     */
    public function setGoldEarned(int $goldEarned)
    {
        return $this->set('goldEarned', $goldEarned);
    }

    /**
     * Gold spent
     * @return int
     */
    public function getGoldSpent()
    {
        return $this->get('goldSpent', 0);
    }


    /**
     * @param int $goldSpent
     * @return static
     */
    public function setGoldSpent(int $goldSpent)
    {
        return $this->set('goldSpent', $goldSpent);
    }

    /**
     * Number of inhibitor kills
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
     * First item ID
     * @return int
     */
    public function getItem0()
    {
        return $this->get('item0', 0);
    }


    /**
     * @param int $item0
     * @return static
     */
    public function setItem0(int $item0)
    {
        return $this->set('item0', $item0);
    }

    /**
     * Second item ID
     * @return int
     */
    public function getItem1()
    {
        return $this->get('item1', 0);
    }


    /**
     * @param int $item1
     * @return static
     */
    public function setItem1(int $item1)
    {
        return $this->set('item1', $item1);
    }

    /**
     * Third item ID
     * @return int
     */
    public function getItem2()
    {
        return $this->get('item2', 0);
    }


    /**
     * @param int $item2
     * @return static
     */
    public function setItem2(int $item2)
    {
        return $this->set('item2', $item2);
    }

    /**
     * Fourth item ID
     * @return int
     */
    public function getItem3()
    {
        return $this->get('item3', 0);
    }


    /**
     * @param int $item3
     * @return static
     */
    public function setItem3(int $item3)
    {
        return $this->set('item3', $item3);
    }

    /**
     * Fifth item ID
     * @return int
     */
    public function getItem4()
    {
        return $this->get('item4', 0);
    }


    /**
     * @param int $item4
     * @return static
     */
    public function setItem4(int $item4)
    {
        return $this->set('item4', $item4);
    }

    /**
     * Sixth item ID
     * @return int
     */
    public function getItem5()
    {
        return $this->get('item5', 0);
    }


    /**
     * @param int $item5
     * @return static
     */
    public function setItem5(int $item5)
    {
        return $this->set('item5', $item5);
    }

    /**
     * Seventh item ID
     * @return int
     */
    public function getItem6()
    {
        return $this->get('item6', 0);
    }


    /**
     * @param int $item6
     * @return static
     */
    public function setItem6(int $item6)
    {
        return $this->set('item6', $item6);
    }

    /**
     * Number of killing sprees
     * @return int
     */
    public function getKillingSprees()
    {
        return $this->get('killingSprees', 0);
    }


    /**
     * @param int $killingSprees
     * @return static
     */
    public function setKillingSprees(int $killingSprees)
    {
        return $this->set('killingSprees', $killingSprees);
    }

    /**
     * Number of kills
     * @return int
     */
    public function getKills()
    {
        return $this->get('kills', 0);
    }


    /**
     * @param int $kills
     * @return static
     */
    public function setKills(int $kills)
    {
        return $this->set('kills', $kills);
    }

    /**
     * Largest critical strike
     * @return int
     */
    public function getLargestCriticalStrike()
    {
        return $this->get('largestCriticalStrike', 0);
    }


    /**
     * @param int $largestCriticalStrike
     * @return static
     */
    public function setLargestCriticalStrike(int $largestCriticalStrike)
    {
        return $this->set('largestCriticalStrike', $largestCriticalStrike);
    }

    /**
     * Largest killing spree
     * @return int
     */
    public function getLargestKillingSpree()
    {
        return $this->get('largestKillingSpree', 0);
    }


    /**
     * @param int $largestKillingSpree
     * @return static
     */
    public function setLargestKillingSpree(int $largestKillingSpree)
    {
        return $this->set('largestKillingSpree', $largestKillingSpree);
    }

    /**
     * Largest multi kill
     * @return int
     */
    public function getLargestMultiKill()
    {
        return $this->get('largestMultiKill', 0);
    }


    /**
     * @param int $largestMultiKill
     * @return static
     */
    public function setLargestMultiKill(int $largestMultiKill)
    {
        return $this->set('largestMultiKill', $largestMultiKill);
    }

    /**
     * Magical damage dealt
     * @return int
     */
    public function getMagicDamageDealt()
    {
        return $this->get('magicDamageDealt', 0);
    }


    /**
     * @param int $magicDamageDealt
     * @return static
     */
    public function setMagicDamageDealt(int $magicDamageDealt)
    {
        return $this->set('magicDamageDealt', $magicDamageDealt);
    }

    /**
     * Magical damage dealt to champions
     * @return int
     */
    public function getMagicDamageDealtToChampions()
    {
        return $this->get('magicDamageDealtToChampions', 0);
    }


    /**
     * @param int $magicDamageDealtToChampions
     * @return static
     */
    public function setMagicDamageDealtToChampions(int $magicDamageDealtToChampions)
    {
        return $this->set('magicDamageDealtToChampions', $magicDamageDealtToChampions);
    }

    /**
     * Magic damage taken
     * @return int
     */
    public function getMagicDamageTaken()
    {
        return $this->get('magicDamageTaken', 0);
    }


    /**
     * @param int $magicDamageTaken
     * @return static
     */
    public function setMagicDamageTaken(int $magicDamageTaken)
    {
        return $this->set('magicDamageTaken', $magicDamageTaken);
    }

    /**
     * Minions killed
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
     * Neutral minions killed
     * @return int
     */
    public function getNeutralMinionsKilled()
    {
        return $this->get('neutralMinionsKilled', 0);
    }


    /**
     * @param int $neutralMinionsKilled
     * @return static
     */
    public function setNeutralMinionsKilled(int $neutralMinionsKilled)
    {
        return $this->set('neutralMinionsKilled', $neutralMinionsKilled);
    }

    /**
     * Neutral jungle minions killed in the enemy team's jungle
     * @return int
     */
    public function getNeutralMinionsKilledEnemyJungle()
    {
        return $this->get('neutralMinionsKilledEnemyJungle', 0);
    }


    /**
     * @param int $neutralMinionsKilledEnemyJungle
     * @return static
     */
    public function setNeutralMinionsKilledEnemyJungle(int $neutralMinionsKilledEnemyJungle)
    {
        return $this->set('neutralMinionsKilledEnemyJungle', $neutralMinionsKilledEnemyJungle);
    }

    /**
     * Neutral jungle minions killed in your team's jungle
     * @return int
     */
    public function getNeutralMinionsKilledTeamJungle()
    {
        return $this->get('neutralMinionsKilledTeamJungle', 0);
    }


    /**
     * @param int $neutralMinionsKilledTeamJungle
     * @return static
     */
    public function setNeutralMinionsKilledTeamJungle(int $neutralMinionsKilledTeamJungle)
    {
        return $this->set('neutralMinionsKilledTeamJungle', $neutralMinionsKilledTeamJungle);
    }

    /**
     * If game was a dominion game, number of node captures
     * @return int
     */
    public function getNodeCapture()
    {
        return $this->get('nodeCapture', 0);
    }


    /**
     * @param int $nodeCapture
     * @return static
     */
    public function setNodeCapture(int $nodeCapture)
    {
        return $this->set('nodeCapture', $nodeCapture);
    }

    /**
     * If game was a dominion game, number of node capture assists
     * @return int
     */
    public function getNodeCaptureAssist()
    {
        return $this->get('nodeCaptureAssist', 0);
    }


    /**
     * @param int $nodeCaptureAssist
     * @return static
     */
    public function setNodeCaptureAssist(int $nodeCaptureAssist)
    {
        return $this->set('nodeCaptureAssist', $nodeCaptureAssist);
    }

    /**
     * If game was a dominion game, number of node neutralizations
     * @return int
     */
    public function getNodeNeutralize()
    {
        return $this->get('nodeNeutralize', 0);
    }


    /**
     * @param int $nodeNeutralize
     * @return static
     */
    public function setNodeNeutralize(int $nodeNeutralize)
    {
        return $this->set('nodeNeutralize', $nodeNeutralize);
    }

    /**
     * If game was a dominion game, number of node neutralization assists
     * @return int
     */
    public function getNodeNeutralizeAssist()
    {
        return $this->get('nodeNeutralizeAssist', 0);
    }


    /**
     * @param int $nodeNeutralizeAssist
     * @return static
     */
    public function setNodeNeutralizeAssist(int $nodeNeutralizeAssist)
    {
        return $this->set('nodeNeutralizeAssist', $nodeNeutralizeAssist);
    }

    /**
     * If game was a dominion game, player's objectives score, otherwise 0
     * @return int
     */
    public function getObjectivePlayerScore()
    {
        return $this->get('objectivePlayerScore', 0);
    }


    /**
     * @param int $objectivePlayerScore
     * @return static
     */
    public function setObjectivePlayerScore(int $objectivePlayerScore)
    {
        return $this->set('objectivePlayerScore', $objectivePlayerScore);
    }

    /**
     * Number of penta kills
     * @return int
     */
    public function getPentaKills()
    {
        return $this->get('pentaKills', 0);
    }


    /**
     * @param int $pentaKills
     * @return static
     */
    public function setPentaKills(int $pentaKills)
    {
        return $this->set('pentaKills', $pentaKills);
    }

    /**
     * Physical damage dealt
     * @return int
     */
    public function getPhysicalDamageDealt()
    {
        return $this->get('physicalDamageDealt', 0);
    }


    /**
     * @param int $physicalDamageDealt
     * @return static
     */
    public function setPhysicalDamageDealt(int $physicalDamageDealt)
    {
        return $this->set('physicalDamageDealt', $physicalDamageDealt);
    }

    /**
     * Physical damage dealt to champions
     * @return int
     */
    public function getPhysicalDamageDealtToChampions()
    {
        return $this->get('physicalDamageDealtToChampions', 0);
    }


    /**
     * @param int $physicalDamageDealtToChampions
     * @return static
     */
    public function setPhysicalDamageDealtToChampions(int $physicalDamageDealtToChampions)
    {
        return $this->set('physicalDamageDealtToChampions', $physicalDamageDealtToChampions);
    }

    /**
     * Physical damage taken
     * @return int
     */
    public function getPhysicalDamageTaken()
    {
        return $this->get('physicalDamageTaken', 0);
    }


    /**
     * @param int $physicalDamageTaken
     * @return static
     */
    public function setPhysicalDamageTaken(int $physicalDamageTaken)
    {
        return $this->set('physicalDamageTaken', $physicalDamageTaken);
    }

    /**
     * Number of quadra kills
     * @return int
     */
    public function getQuadraKills()
    {
        return $this->get('quadraKills', 0);
    }


    /**
     * @param int $quadraKills
     * @return static
     */
    public function setQuadraKills(int $quadraKills)
    {
        return $this->set('quadraKills', $quadraKills);
    }

    /**
     * Sight wards purchased
     * @return int
     */
    public function getSightWardsBoughtInGame()
    {
        return $this->get('sightWardsBoughtInGame', 0);
    }


    /**
     * @param int $sightWardsBoughtInGame
     * @return static
     */
    public function setSightWardsBoughtInGame(int $sightWardsBoughtInGame)
    {
        return $this->set('sightWardsBoughtInGame', $sightWardsBoughtInGame);
    }

    /**
     * If game was a dominion game, number of completed team objectives (i.e., quests)
     * @return int
     */
    public function getTeamObjective()
    {
        return $this->get('teamObjective', 0);
    }


    /**
     * @param int $teamObjective
     * @return static
     */
    public function setTeamObjective(int $teamObjective)
    {
        return $this->set('teamObjective', $teamObjective);
    }

    /**
     * Total damage dealt
     * @return int
     */
    public function getTotalDamageDealt()
    {
        return $this->get('totalDamageDealt', 0);
    }


    /**
     * @param int $totalDamageDealt
     * @return static
     */
    public function setTotalDamageDealt(int $totalDamageDealt)
    {
        return $this->set('totalDamageDealt', $totalDamageDealt);
    }

    /**
     * Total damage dealt to champions
     * @return int
     */
    public function getTotalDamageDealtToChampions()
    {
        return $this->get('totalDamageDealtToChampions', 0);
    }


    /**
     * @param int $totalDamageDealtToChampions
     * @return static
     */
    public function setTotalDamageDealtToChampions(int $totalDamageDealtToChampions)
    {
        return $this->set('totalDamageDealtToChampions', $totalDamageDealtToChampions);
    }

    /**
     * Total damage taken
     * @return int
     */
    public function getTotalDamageTaken()
    {
        return $this->get('totalDamageTaken', 0);
    }


    /**
     * @param int $totalDamageTaken
     * @return static
     */
    public function setTotalDamageTaken(int $totalDamageTaken)
    {
        return $this->set('totalDamageTaken', $totalDamageTaken);
    }

    /**
     * Total heal amount
     * @return int
     */
    public function getTotalHeal()
    {
        return $this->get('totalHeal', 0);
    }


    /**
     * @param int $totalHeal
     * @return static
     */
    public function setTotalHeal(int $totalHeal)
    {
        return $this->set('totalHeal', $totalHeal);
    }

    /**
     * If game was a dominion game, player's total score, otherwise 0
     * @return int
     */
    public function getTotalPlayerScore()
    {
        return $this->get('totalPlayerScore', 0);
    }


    /**
     * @param int $totalPlayerScore
     * @return static
     */
    public function setTotalPlayerScore(int $totalPlayerScore)
    {
        return $this->set('totalPlayerScore', $totalPlayerScore);
    }

    /**
     * If game was a dominion game, team rank of the player's total score (e.g., 1-5)
     * @return int
     */
    public function getTotalScoreRank()
    {
        return $this->get('totalScoreRank', 0);
    }


    /**
     * @param int $totalScoreRank
     * @return static
     */
    public function setTotalScoreRank(int $totalScoreRank)
    {
        return $this->set('totalScoreRank', $totalScoreRank);
    }

    /**
     * Total dealt crowd control time
     * @return int
     */
    public function getTotalTimeCrowdControlDealt()
    {
        return $this->get('totalTimeCrowdControlDealt', 0);
    }


    /**
     * @param int $totalTimeCrowdControlDealt
     * @return static
     */
    public function setTotalTimeCrowdControlDealt(int $totalTimeCrowdControlDealt)
    {
        return $this->set('totalTimeCrowdControlDealt', $totalTimeCrowdControlDealt);
    }

    /**
     * Total units healed
     * @return int
     */
    public function getTotalUnitsHealed()
    {
        return $this->get('totalUnitsHealed', 0);
    }


    /**
     * @param int $totalUnitsHealed
     * @return static
     */
    public function setTotalUnitsHealed(int $totalUnitsHealed)
    {
        return $this->set('totalUnitsHealed', $totalUnitsHealed);
    }

    /**
     * Number of tower kills
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
     * Number of triple kills
     * @return int
     */
    public function getTripleKills()
    {
        return $this->get('tripleKills', 0);
    }


    /**
     * @param int $tripleKills
     * @return static
     */
    public function setTripleKills(int $tripleKills)
    {
        return $this->set('tripleKills', $tripleKills);
    }

    /**
     * True damage dealt
     * @return int
     */
    public function getTrueDamageDealt()
    {
        return $this->get('trueDamageDealt', 0);
    }


    /**
     * @param int $trueDamageDealt
     * @return static
     */
    public function setTrueDamageDealt(int $trueDamageDealt)
    {
        return $this->set('trueDamageDealt', $trueDamageDealt);
    }

    /**
     * True damage dealt to champions
     * @return int
     */
    public function getTrueDamageDealtToChampions()
    {
        return $this->get('trueDamageDealtToChampions', 0);
    }


    /**
     * @param int $trueDamageDealtToChampions
     * @return static
     */
    public function setTrueDamageDealtToChampions(int $trueDamageDealtToChampions)
    {
        return $this->set('trueDamageDealtToChampions', $trueDamageDealtToChampions);
    }

    /**
     * True damage taken
     * @return int
     */
    public function getTrueDamageTaken()
    {
        return $this->get('trueDamageTaken', 0);
    }


    /**
     * @param int $trueDamageTaken
     * @return static
     */
    public function setTrueDamageTaken(int $trueDamageTaken)
    {
        return $this->set('trueDamageTaken', $trueDamageTaken);
    }

    /**
     * Number of unreal kills
     * @return int
     */
    public function getUnrealKills()
    {
        return $this->get('unrealKills', 0);
    }


    /**
     * @param int $unrealKills
     * @return static
     */
    public function setUnrealKills(int $unrealKills)
    {
        return $this->set('unrealKills', $unrealKills);
    }

    /**
     * Vision wards purchased
     * @return int
     */
    public function getVisionWardsBoughtInGame()
    {
        return $this->get('visionWardsBoughtInGame', 0);
    }


    /**
     * @param int $visionWardsBoughtInGame
     * @return static
     */
    public function setVisionWardsBoughtInGame(int $visionWardsBoughtInGame)
    {
        return $this->set('visionWardsBoughtInGame', $visionWardsBoughtInGame);
    }

    /**
     * Number of wards killed
     * @return int
     */
    public function getWardsKilled()
    {
        return $this->get('wardsKilled', 0);
    }


    /**
     * @param int $wardsKilled
     * @return static
     */
    public function setWardsKilled(int $wardsKilled)
    {
        return $this->set('wardsKilled', $wardsKilled);
    }

    /**
     * Number of wards placed
     * @return int
     */
    public function getWardsPlaced()
    {
        return $this->get('wardsPlaced', 0);
    }


    /**
     * @param int $wardsPlaced
     * @return static
     */
    public function setWardsPlaced(int $wardsPlaced)
    {
        return $this->set('wardsPlaced', $wardsPlaced);
    }

    /**
     * Flag indicating whether or not the participant won
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