<?php

namespace Keiwen\RiotApi\Dto\Match;
use Keiwen\RiotApi\Constants\MatchmakingQueue;
use Keiwen\RiotApi\Dto\Player\ParticipantDto;
use Keiwen\RiotApi\Dto\Player\ParticipantIdentityDto;


/**
 * This object contains match detail information
 */
class MatchDetailDto extends GameDto
{

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['participantIdentities'] = ParticipantIdentityDto::class;
        $included['participants'] = ParticipantDto::class;
        $included['teams'] = MatchTeamStatsDto::class;
        $included['timeline'] = TimelineDto::class;
        return $included;
    }


    /**
     * Match creation time.
     * Designates when the team select lobby is created and/or the match is made through match making,
     * not when the game actually starts.
     * @return string
     */
    public function getMatchCreation()
    {
        return $this->get('matchCreation', '0');
    }


    /**
     * @param int $matchCreation
     * @return static
     */
    public function setMatchCreation($matchCreation)
    {
        //if int to large, turned to float, so always turned to string
        return $this->set('matchCreation', ''.$matchCreation);
    }

    /**
     * Match duration
     * @return int
     */
    public function getMatchDuration()
    {
        return $this->get('matchDuration', 0);
    }


    /**
     * @param int $matchDuration
     * @return static
     */
    public function setMatchDuration(int $matchDuration)
    {
        return $this->set('matchDuration', $matchDuration);
    }

    /**
     * Match version
     * @return string
     */
    public function getMatchVersion()
    {
        return $this->get('matchVersion', '');
    }


    /**
     * @param string $matchVersion
     * @return static
     */
    public function setMatchVersion(string $matchVersion)
    {
        return $this->set('matchVersion', $matchVersion);
    }

    /**
     * Participant identity information
     * @return ParticipantIdentityDto[]
     */
    public function getParticipantIdentities()
    {
        return $this->get('participantIdentities', array());
    }


    /**
     * @param ParticipantIdentityDto[] $participantIdentities
     * @return static
     */
    public function setParticipantIdentities(array $participantIdentities)
    {
        return $this->set('participantIdentities', $participantIdentities);
    }

    /**
     * Participant information
     * @return ParticipantDto[]
     */
    public function getParticipants()
    {
        return $this->get('participants', array());
    }


    /**
     * @param ParticipantDto[] $participants
     * @return static
     */
    public function setParticipants(array $participants)
    {
        return $this->set('participants', $participants);
    }

    /**
     * Platform ID of the match
     * @return string
     */
    public function getPlatformId()
    {
        return $this->get('platformId', '');
    }


    /**
     * @param string $platformId
     * @return static
     */
    public function setPlatformId(string $platformId)
    {
        return $this->set('platformId', $platformId);
    }

    /**
     * Match queue type
     * (Legal values: CUSTOM, NORMAL_5x5_BLIND, RANKED_SOLO_5x5, RANKED_PREMADE_5x5,
     * BOT_5x5, NORMAL_3x3, RANKED_PREMADE_3x3, NORMAL_5x5_DRAFT, ODIN_5x5_BLIND,
     * ODIN_5x5_DRAFT, BOT_ODIN_5x5, BOT_5x5_INTRO, BOT_5x5_BEGINNER, BOT_5x5_INTERMEDIATE,
     * RANKED_TEAM_3x3, RANKED_TEAM_5x5, BOT_TT_3x3, GROUP_FINDER_5x5, ARAM_5x5, ONEFORALL_5x5,
     * FIRSTBLOOD_1x1, FIRSTBLOOD_2x2, SR_6x6, URF_5x5, ONEFORALL_MIRRORMODE_5x5, BOT_URF_5x5,
     * NIGHTMARE_BOT_5x5_RANK1, NIGHTMARE_BOT_5x5_RANK2, NIGHTMARE_BOT_5x5_RANK5, ASCENSION_5x5,
     * HEXAKILL, BILGEWATER_ARAM_5x5, KING_PORO_5x5, COUNTER_PICK, BILGEWATER_5x5,
     * TEAM_BUILDER_DRAFT_UNRANKED_5x5, TEAM_BUILDER_DRAFT_RANKED_5x5)
     * @return string
     */
    public function getQueueType()
    {
        return $this->get('queueType', MatchmakingQueue::CUSTOM);
    }


    /**
     * @param string $queueType
     * @return static
     */
    public function setQueueType(string $queueType)
    {
        return $this->set('queueType', $queueType);
    }

    /**
     * Region where the match was played
     * @return string
     */
    public function getRegion()
    {
        return $this->get('region', '');
    }


    /**
     * @param string $region
     * @return static
     */
    public function setRegion(string $region)
    {
        return $this->set('region', $region);
    }

    /**
     * Season match was played
     * (Legal values: PRESEASON3, SEASON3, PRESEASON2014, SEASON2014, PRESEASON2015,
     * SEASON2015, PRESEASON2016, SEASON2016)
     * @return string
     */
    public function getSeason()
    {
        return $this->get('season', 'PRESEASON3');
    }


    /**
     * @param string $season
     * @return static
     */
    public function setSeason(string $season)
    {
        return $this->set('season', $season);
    }

    /**
     * MatchTeamStatsDto[] information
     * @return array
     */
    public function getTeams()
    {
        return $this->get('teams', array());
    }


    /**
     * @param MatchTeamStatsDto[] $teams
     * @return static
     */
    public function setTeams(array $teams)
    {
        return $this->set('teams', $teams);
    }


    /**
     * Match timeline data (not included by default)
     * @return TimelineDto
     */
    public function getTimeline()
    {
        return $this->get('timeline', new TimelineDto());
    }


    /**
     * @param TimelineDto $timeline
     * @return static
     */
    public function setTimeline(TimelineDto $timeline)
    {
        return $this->set('timeline', $timeline);
    }



}
