<?php

namespace Keiwen\RiotApi\Dto\Player;



/**
 * This object contains match participant information
 */
class ParticipantDto extends PlayerDto
{

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['stats'] = ParticipantStatsDto::class;
        $included['timeline'] = ParticipantTimelineDto::class;
        return $included;
    }


    /**
     * Highest ranked tier achieved for the previous season, if any, otherwise null.
     * Used to display border in game loading screen.
     * (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE, UNRANKED)
     * @return string
     */
    public function getHighestAchievedSeasonTier()
    {
        return $this->get('highestAchievedSeasonTier', 'UNRANKED');
    }


    /**
     * @param string $highestAchievedSeasonTier
     * @return static
     */
    public function setHighestAchievedSeasonTier(string $highestAchievedSeasonTier)
    {
        return $this->set('highestAchievedSeasonTier', $highestAchievedSeasonTier);
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
     * Participant statistics
     * @return ParticipantStatsDto
     */
    public function getStats()
    {
        return $this->get('stats', new ParticipantStatsDto());
    }


    /**
     * @param ParticipantStatsDto $stats
     * @return static
     */
    public function setStats(ParticipantStatsDto $stats)
    {
        return $this->set('stats', $stats);
    }

    /**
     * Timeline data. Delta fields refer to values for the specified period
     * (e.g., the gold per minute over the first 10 minutes of the game versus the second 20 minutes of the game.
     * Diffs fields refer to the deltas versus the calculated lane opponent(s).
     * @return ParticipantTimelineDto
     */
    public function getTimeline()
    {
        return $this->get('timeline', new ParticipantTimelineDto());
    }


    /**
     * @param ParticipantTimelineDto $timeline
     * @return static
     */
    public function setTimeline(ParticipantTimelineDto $timeline)
    {
        return $this->set('timeline', $timeline);
    }



}
