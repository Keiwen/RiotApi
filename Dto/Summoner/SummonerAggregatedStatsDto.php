<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains aggregated stat information.
 */
class SummonerAggregatedStatsDto extends DtoParent
{

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageAssists()
    {
        return $this->get('averageAssists', 0);
    }


    /**
     * @param int $averageAssists
     * @return static
     */
    public function setAverageAssists(int $averageAssists)
    {
        return $this->set('averageAssists', $averageAssists);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageChampionsKilled()
    {
        return $this->get('averageChampionsKilled', 0);
    }


    /**
     * @param int $averageChampionsKilled
     * @return static
     */
    public function setAverageChampionsKilled(int $averageChampionsKilled)
    {
        return $this->set('averageChampionsKilled', $averageChampionsKilled);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageCombatPlayerScore()
    {
        return $this->get('averageCombatPlayerScore', 0);
    }


    /**
     * @param int $averageCombatPlayerScore
     * @return static
     */
    public function setAverageCombatPlayerScore(int $averageCombatPlayerScore)
    {
        return $this->set('averageCombatPlayerScore', $averageCombatPlayerScore);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageNodeCapture()
    {
        return $this->get('averageNodeCapture', 0);
    }


    /**
     * @param int $averageNodeCapture
     * @return static
     */
    public function setAverageNodeCapture(int $averageNodeCapture)
    {
        return $this->set('averageNodeCapture', $averageNodeCapture);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageNodeCaptureAssist()
    {
        return $this->get('averageNodeCaptureAssist', 0);
    }


    /**
     * @param int $averageNodeCaptureAssist
     * @return static
     */
    public function setAverageNodeCaptureAssist(int $averageNodeCaptureAssist)
    {
        return $this->set('averageNodeCaptureAssist', $averageNodeCaptureAssist);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageNodeNeutralize()
    {
        return $this->get('averageNodeNeutralize', 0);
    }


    /**
     * @param int $averageNodeNeutralize
     * @return static
     */
    public function setAverageNodeNeutralize(int $averageNodeNeutralize)
    {
        return $this->set('averageNodeNeutralize', $averageNodeNeutralize);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageNodeNeutralizeAssist()
    {
        return $this->get('averageNodeNeutralizeAssist', 0);
    }


    /**
     * @param int $averageNodeNeutralizeAssist
     * @return static
     */
    public function setAverageNodeNeutralizeAssist(int $averageNodeNeutralizeAssist)
    {
        return $this->set('averageNodeNeutralizeAssist', $averageNodeNeutralizeAssist);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageNumDeaths()
    {
        return $this->get('averageNumDeaths', 0);
    }


    /**
     * @param int $averageNumDeaths
     * @return static
     */
    public function setAverageNumDeaths(int $averageNumDeaths)
    {
        return $this->set('averageNumDeaths', $averageNumDeaths);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageObjectivePlayerScore()
    {
        return $this->get('averageObjectivePlayerScore', 0);
    }


    /**
     * @param int $averageObjectivePlayerScore
     * @return static
     */
    public function setAverageObjectivePlayerScore(int $averageObjectivePlayerScore)
    {
        return $this->set('averageObjectivePlayerScore', $averageObjectivePlayerScore);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageTeamObjective()
    {
        return $this->get('averageTeamObjective', 0);
    }


    /**
     * @param int $averageTeamObjective
     * @return static
     */
    public function setAverageTeamObjective(int $averageTeamObjective)
    {
        return $this->set('averageTeamObjective', $averageTeamObjective);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getAverageTotalPlayerScore()
    {
        return $this->get('averageTotalPlayerScore', 0);
    }


    /**
     * @param int $averageTotalPlayerScore
     * @return static
     */
    public function setAverageTotalPlayerScore(int $averageTotalPlayerScore)
    {
        return $this->set('averageTotalPlayerScore', $averageTotalPlayerScore);
    }

    /**
     *
     * @return int
     */
    public function getBotGamesPlayed()
    {
        return $this->get('botGamesPlayed', 0);
    }


    /**
     * @param int $botGamesPlayed
     * @return static
     */
    public function setBotGamesPlayed(int $botGamesPlayed)
    {
        return $this->set('botGamesPlayed', $botGamesPlayed);
    }

    /**
     *
     * @return int
     */
    public function getKillingSpree()
    {
        return $this->get('killingSpree', 0);
    }


    /**
     * @param int $killingSpree
     * @return static
     */
    public function setKillingSpree(int $killingSpree)
    {
        return $this->set('killingSpree', $killingSpree);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getMaxAssists()
    {
        return $this->get('maxAssists', 0);
    }


    /**
     * @param int $maxAssists
     * @return static
     */
    public function setMaxAssists(int $maxAssists)
    {
        return $this->set('maxAssists', $maxAssists);
    }

    /**
     *
     * @return int
     */
    public function getMaxChampionsKilled()
    {
        return $this->get('maxChampionsKilled', 0);
    }


    /**
     * @param int $maxChampionsKilled
     * @return static
     */
    public function setMaxChampionsKilled(int $maxChampionsKilled)
    {
        return $this->set('maxChampionsKilled', $maxChampionsKilled);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getMaxCombatPlayerScore()
    {
        return $this->get('maxCombatPlayerScore', 0);
    }


    /**
     * @param int $maxCombatPlayerScore
     * @return static
     */
    public function setMaxCombatPlayerScore(int $maxCombatPlayerScore)
    {
        return $this->set('maxCombatPlayerScore', $maxCombatPlayerScore);
    }

    /**
     *
     * @return int
     */
    public function getMaxLargestCriticalStrike()
    {
        return $this->get('maxLargestCriticalStrike', 0);
    }


    /**
     * @param int $maxLargestCriticalStrike
     * @return static
     */
    public function setMaxLargestCriticalStrike(int $maxLargestCriticalStrike)
    {
        return $this->set('maxLargestCriticalStrike', $maxLargestCriticalStrike);
    }

    /**
     *
     * @return int
     */
    public function getMaxLargestKillingSpree()
    {
        return $this->get('maxLargestKillingSpree', 0);
    }


    /**
     * @param int $maxLargestKillingSpree
     * @return static
     */
    public function setMaxLargestKillingSpree(int $maxLargestKillingSpree)
    {
        return $this->set('maxLargestKillingSpree', $maxLargestKillingSpree);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getMaxNodeCapture()
    {
        return $this->get('maxNodeCapture', 0);
    }


    /**
     * @param int $maxNodeCapture
     * @return static
     */
    public function setMaxNodeCapture(int $maxNodeCapture)
    {
        return $this->set('maxNodeCapture', $maxNodeCapture);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getMaxNodeCaptureAssist()
    {
        return $this->get('maxNodeCaptureAssist', 0);
    }


    /**
     * @param int $maxNodeCaptureAssist
     * @return static
     */
    public function setMaxNodeCaptureAssist(int $maxNodeCaptureAssist)
    {
        return $this->set('maxNodeCaptureAssist', $maxNodeCaptureAssist);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getMaxNodeNeutralize()
    {
        return $this->get('maxNodeNeutralize', 0);
    }


    /**
     * @param int $maxNodeNeutralize
     * @return static
     */
    public function setMaxNodeNeutralize(int $maxNodeNeutralize)
    {
        return $this->set('maxNodeNeutralize', $maxNodeNeutralize);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getMaxNodeNeutralizeAssist()
    {
        return $this->get('maxNodeNeutralizeAssist', 0);
    }


    /**
     * @param int $maxNodeNeutralizeAssist
     * @return static
     */
    public function setMaxNodeNeutralizeAssist(int $maxNodeNeutralizeAssist)
    {
        return $this->set('maxNodeNeutralizeAssist', $maxNodeNeutralizeAssist);
    }

    /**
     * Only returned for ranked statistics.
     * @return int
     */
    public function getMaxNumDeaths()
    {
        return $this->get('maxNumDeaths', 0);
    }


    /**
     * @param int $maxNumDeaths
     * @return static
     */
    public function setMaxNumDeaths(int $maxNumDeaths)
    {
        return $this->set('maxNumDeaths', $maxNumDeaths);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getMaxObjectivePlayerScore()
    {
        return $this->get('maxObjectivePlayerScore', 0);
    }


    /**
     * @param int $maxObjectivePlayerScore
     * @return static
     */
    public function setMaxObjectivePlayerScore(int $maxObjectivePlayerScore)
    {
        return $this->set('maxObjectivePlayerScore', $maxObjectivePlayerScore);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getMaxTeamObjective()
    {
        return $this->get('maxTeamObjective', 0);
    }


    /**
     * @param int $maxTeamObjective
     * @return static
     */
    public function setMaxTeamObjective(int $maxTeamObjective)
    {
        return $this->set('maxTeamObjective', $maxTeamObjective);
    }

    /**
     *
     * @return int
     */
    public function getMaxTimePlayed()
    {
        return $this->get('maxTimePlayed', 0);
    }


    /**
     * @param int $maxTimePlayed
     * @return static
     */
    public function setMaxTimePlayed(int $maxTimePlayed)
    {
        return $this->set('maxTimePlayed', $maxTimePlayed);
    }

    /**
     *
     * @return int
     */
    public function getMaxTimeSpentLiving()
    {
        return $this->get('maxTimeSpentLiving', 0);
    }


    /**
     * @param int $maxTimeSpentLiving
     * @return static
     */
    public function setMaxTimeSpentLiving(int $maxTimeSpentLiving)
    {
        return $this->set('maxTimeSpentLiving', $maxTimeSpentLiving);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getMaxTotalPlayerScore()
    {
        return $this->get('maxTotalPlayerScore', 0);
    }


    /**
     * @param int $maxTotalPlayerScore
     * @return static
     */
    public function setMaxTotalPlayerScore(int $maxTotalPlayerScore)
    {
        return $this->set('maxTotalPlayerScore', $maxTotalPlayerScore);
    }

    /**
     *
     * @return int
     */
    public function getMostChampionKillsPerSession()
    {
        return $this->get('mostChampionKillsPerSession', 0);
    }


    /**
     * @param int $mostChampionKillsPerSession
     * @return static
     */
    public function setMostChampionKillsPerSession(int $mostChampionKillsPerSession)
    {
        return $this->set('mostChampionKillsPerSession', $mostChampionKillsPerSession);
    }

    /**
     *
     * @return int
     */
    public function getMostSpellsCast()
    {
        return $this->get('mostSpellsCast', 0);
    }


    /**
     * @param int $mostSpellsCast
     * @return static
     */
    public function setMostSpellsCast(int $mostSpellsCast)
    {
        return $this->set('mostSpellsCast', $mostSpellsCast);
    }

    /**
     *
     * @return int
     */
    public function getNormalGamesPlayed()
    {
        return $this->get('normalGamesPlayed', 0);
    }


    /**
     * @param int $normalGamesPlayed
     * @return static
     */
    public function setNormalGamesPlayed(int $normalGamesPlayed)
    {
        return $this->set('normalGamesPlayed', $normalGamesPlayed);
    }

    /**
     *
     * @return int
     */
    public function getRankedPremadeGamesPlayed()
    {
        return $this->get('rankedPremadeGamesPlayed', 0);
    }


    /**
     * @param int $rankedPremadeGamesPlayed
     * @return static
     */
    public function setRankedPremadeGamesPlayed(int $rankedPremadeGamesPlayed)
    {
        return $this->set('rankedPremadeGamesPlayed', $rankedPremadeGamesPlayed);
    }

    /**
     *
     * @return int
     */
    public function getRankedSoloGamesPlayed()
    {
        return $this->get('rankedSoloGamesPlayed', 0);
    }


    /**
     * @param int $rankedSoloGamesPlayed
     * @return static
     */
    public function setRankedSoloGamesPlayed(int $rankedSoloGamesPlayed)
    {
        return $this->set('rankedSoloGamesPlayed', $rankedSoloGamesPlayed);
    }

    /**
     *
     * @return int
     */
    public function getTotalAssists()
    {
        return $this->get('totalAssists', 0);
    }


    /**
     * @param int $totalAssists
     * @return static
     */
    public function setTotalAssists(int $totalAssists)
    {
        return $this->set('totalAssists', $totalAssists);
    }

    /**
     *
     * @return int
     */
    public function getTotalChampionKills()
    {
        return $this->get('totalChampionKills', 0);
    }


    /**
     * @param int $totalChampionKills
     * @return static
     */
    public function setTotalChampionKills(int $totalChampionKills)
    {
        return $this->set('totalChampionKills', $totalChampionKills);
    }

    /**
     *
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
     *
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
     * Only returned for ranked statistics.
     * @return int
     */
    public function getTotalDeathsPerSession()
    {
        return $this->get('totalDeathsPerSession', 0);
    }


    /**
     * @param int $totalDeathsPerSession
     * @return static
     */
    public function setTotalDeathsPerSession(int $totalDeathsPerSession)
    {
        return $this->set('totalDeathsPerSession', $totalDeathsPerSession);
    }

    /**
     *
     * @return int
     */
    public function getTotalDoubleKills()
    {
        return $this->get('totalDoubleKills', 0);
    }


    /**
     * @param int $totalDoubleKills
     * @return static
     */
    public function setTotalDoubleKills(int $totalDoubleKills)
    {
        return $this->set('totalDoubleKills', $totalDoubleKills);
    }

    /**
     *
     * @return int
     */
    public function getTotalFirstBlood()
    {
        return $this->get('totalFirstBlood', 0);
    }


    /**
     * @param int $totalFirstBlood
     * @return static
     */
    public function setTotalFirstBlood(int $totalFirstBlood)
    {
        return $this->set('totalFirstBlood', $totalFirstBlood);
    }

    /**
     *
     * @return int
     */
    public function getTotalGoldEarned()
    {
        return $this->get('totalGoldEarned', 0);
    }


    /**
     * @param int $totalGoldEarned
     * @return static
     */
    public function setTotalGoldEarned(int $totalGoldEarned)
    {
        return $this->set('totalGoldEarned', $totalGoldEarned);
    }

    /**
     *
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
     *
     * @return int
     */
    public function getTotalMagicDamageDealt()
    {
        return $this->get('totalMagicDamageDealt', 0);
    }


    /**
     * @param int $totalMagicDamageDealt
     * @return static
     */
    public function setTotalMagicDamageDealt(int $totalMagicDamageDealt)
    {
        return $this->set('totalMagicDamageDealt', $totalMagicDamageDealt);
    }

    /**
     *
     * @return int
     */
    public function getTotalMinionKills()
    {
        return $this->get('totalMinionKills', 0);
    }


    /**
     * @param int $totalMinionKills
     * @return static
     */
    public function setTotalMinionKills(int $totalMinionKills)
    {
        return $this->set('totalMinionKills', $totalMinionKills);
    }

    /**
     *
     * @return int
     */
    public function getTotalNeutralMinionsKilled()
    {
        return $this->get('totalNeutralMinionsKilled', 0);
    }


    /**
     * @param int $totalNeutralMinionsKilled
     * @return static
     */
    public function setTotalNeutralMinionsKilled(int $totalNeutralMinionsKilled)
    {
        return $this->set('totalNeutralMinionsKilled', $totalNeutralMinionsKilled);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getTotalNodeCapture()
    {
        return $this->get('totalNodeCapture', 0);
    }


    /**
     * @param int $totalNodeCapture
     * @return static
     */
    public function setTotalNodeCapture(int $totalNodeCapture)
    {
        return $this->set('totalNodeCapture', $totalNodeCapture);
    }

    /**
     * Dominion only.
     * @return int
     */
    public function getTotalNodeNeutralize()
    {
        return $this->get('totalNodeNeutralize', 0);
    }


    /**
     * @param int $totalNodeNeutralize
     * @return static
     */
    public function setTotalNodeNeutralize(int $totalNodeNeutralize)
    {
        return $this->set('totalNodeNeutralize', $totalNodeNeutralize);
    }

    /**
     *
     * @return int
     */
    public function getTotalPentaKills()
    {
        return $this->get('totalPentaKills', 0);
    }


    /**
     * @param int $totalPentaKills
     * @return static
     */
    public function setTotalPentaKills(int $totalPentaKills)
    {
        return $this->set('totalPentaKills', $totalPentaKills);
    }

    /**
     *
     * @return int
     */
    public function getTotalPhysicalDamageDealt()
    {
        return $this->get('totalPhysicalDamageDealt', 0);
    }


    /**
     * @param int $totalPhysicalDamageDealt
     * @return static
     */
    public function setTotalPhysicalDamageDealt(int $totalPhysicalDamageDealt)
    {
        return $this->set('totalPhysicalDamageDealt', $totalPhysicalDamageDealt);
    }

    /**
     *
     * @return int
     */
    public function getTotalQuadraKills()
    {
        return $this->get('totalQuadraKills', 0);
    }


    /**
     * @param int $totalQuadraKills
     * @return static
     */
    public function setTotalQuadraKills(int $totalQuadraKills)
    {
        return $this->set('totalQuadraKills', $totalQuadraKills);
    }

    /**
     *
     * @return int
     */
    public function getTotalSessionsLost()
    {
        return $this->get('totalSessionsLost', 0);
    }


    /**
     * @param int $totalSessionsLost
     * @return static
     */
    public function setTotalSessionsLost(int $totalSessionsLost)
    {
        return $this->set('totalSessionsLost', $totalSessionsLost);
    }

    /**
     *
     * @return int
     */
    public function getTotalSessionsPlayed()
    {
        return $this->get('totalSessionsPlayed', 0);
    }


    /**
     * @param int $totalSessionsPlayed
     * @return static
     */
    public function setTotalSessionsPlayed(int $totalSessionsPlayed)
    {
        return $this->set('totalSessionsPlayed', $totalSessionsPlayed);
    }

    /**
     *
     * @return int
     */
    public function getTotalSessionsWon()
    {
        return $this->get('totalSessionsWon', 0);
    }


    /**
     * @param int $totalSessionsWon
     * @return static
     */
    public function setTotalSessionsWon(int $totalSessionsWon)
    {
        return $this->set('totalSessionsWon', $totalSessionsWon);
    }

    /**
     *
     * @return int
     */
    public function getTotalTripleKills()
    {
        return $this->get('totalTripleKills', 0);
    }


    /**
     * @param int $totalTripleKills
     * @return static
     */
    public function setTotalTripleKills(int $totalTripleKills)
    {
        return $this->set('totalTripleKills', $totalTripleKills);
    }

    /**
     *
     * @return int
     */
    public function getTotalTurretsKilled()
    {
        return $this->get('totalTurretsKilled', 0);
    }


    /**
     * @param int $totalTurretsKilled
     * @return static
     */
    public function setTotalTurretsKilled(int $totalTurretsKilled)
    {
        return $this->set('totalTurretsKilled', $totalTurretsKilled);
    }

    /**
     *
     * @return int
     */
    public function getTotalUnrealKills()
    {
        return $this->get('totalUnrealKills', 0);
    }


    /**
     * @param int $totalUnrealKills
     * @return static
     */
    public function setTotalUnrealKills(int $totalUnrealKills)
    {
        return $this->set('totalUnrealKills', $totalUnrealKills);
    }


}