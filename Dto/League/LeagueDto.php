<?php

namespace Keiwen\RiotApi\Dto\League;
use Keiwen\RiotApi\Constants\MatchmakingQueue;
use Keiwen\RiotApi\Constants\RankedTier;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains league information.
 */
class LeagueDto extends DtoParent
{



    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['entries'] = LeagueEntryDto::class;
        return $included;
    }


    /**
     * The requested league entries.
     * @return LeagueEntryDto[]
     */
    public function getEntries()
    {
        return $this->get('entries', array());
    }


    /**
     * @param LeagueEntryDto[] $entries
     * @return static
     */
    public function setEntries($entries)
    {
        if(empty($entries)) $entries= array();
        return $this->set('entries', $entries);
    }


    /**
     * This name is an internal place-holder name only.
     * Display and localization of names in the game client are handled client-side.
     * @return string
     */
    public function getName()
    {
        return $this->get('name', '');
    }


    /**
     * @param string $name
     * @return static
     */
    public function setName(string $name)
    {
        return $this->set('name', $name);
    }


    /**
     * Specifies the relevant participant that is a member of this league
     * (i.e., a requested summoner ID, a requested team ID,
     * or the ID of a team to which one of the requested summoners belongs).
     * Only present when full league is requested so that participant's entry can be identified.
     * Not present when individual entry is requested.
     * @return string
     */
    public function getParticipantId()
    {
        return $this->get('participantId', '');
    }


    /**
     * @param string $participantId
     * @return static
     */
    public function setParticipantId(string $participantId)
    {
        return $this->set('participantId', $participantId);
    }


    /**
     * The league's queue type.
     * (Legal values: RANKED_SOLO_5x5, RANKED_TEAM_3x3, RANKED_TEAM_5x5)
     * @return string
     */
    public function getQueue()
    {
        return $this->get('queue', MatchmakingQueue::RANKED_SOLO_5x5);
    }

    /**
     * @param string $queue
     * @return static
     */
    public function setQueue(string $queue)
    {
        return $this->set('queue', $queue);
    }


    /**
     * The league's tier.
     * (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE)
     * @return string
     */
    public function getTier()
    {
        return $this->get('tier', RankedTier::BRONZE);
    }


    /**
     * @param string $tier
     * @return static
     */
    public function setTier(string $tier)
    {
        return $this->set('tier', $tier);
    }



}