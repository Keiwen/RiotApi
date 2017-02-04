<?php

namespace Keiwen\RiotApi\Dto\Match;
use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Player\ParticipantFrameDto;


/**
 * This object contains game frame information
 */
class MatchFrameDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['events'] = MatchEventDto::class;
        $included['participantFrames'] = ParticipantFrameDto::class;
        return $included;
    }


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjectMapList()
    {
        $included = parent::includedJsonObjectMapList();
        $included[] = 'events';
        $included[] = 'participantFrames';
        return $included;
    }



    /**
     * List of events for this frame.
     * @return MatchEventDto[]
     */
    public function getEvents()
    {
        return $this->get('events', array());
    }


    /**
     * @param MatchEventDto[] $events
     * @return static
     */
    public function setEvents(array $events)
    {
        return $this->set('events', $events);
    }


    /**
     * Map[string,ParticipantFrame]
     * Map of each participant ID to the participant's information for the frame.
     * @return ParticipantFrameDto[]
     */
    public function getParticipantFrames()
    {
        return $this->get('participantFrames', array());
    }


    /**
     * @param ParticipantFrameDto[] $participantFrames
     * @return static
     */
    public function setParticipantFrames(array $participantFrames)
    {
        return $this->set('participantFrames', $participantFrames);
    }

    /**
     * Represents how many milliseconds into the game the frame occurred.
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
        return $this->set('timestamp', ''.$timestamp);
    }


}
