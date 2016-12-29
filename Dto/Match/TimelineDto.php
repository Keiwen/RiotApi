<?php

namespace Keiwen\RiotApi\Dto\Match;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains game timeline information
 */
class TimelineDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['frames'] = MatchFrameDto::class;
        return $included;
    }


    /**
     * Time between each returned frame in milliseconds.
     * @return int
     */
    public function getFrameInterval()
    {
        return $this->get('frameInterval', 0);
    }


    /**
     * @param int $frameInterval
     * @return static
     */
    public function setFrameInterval(int $frameInterval)
    {
        return $this->set('frameInterval', $frameInterval);
    }

    /**
     * List of timeline frames for the game.
     * @return MatchFrameDto[]
     */
    public function getFrames()
    {
        return $this->get('frames', array());
    }


    /**
     * @param MatchFrameDto[] $frames
     * @return static
     */
    public function setFrames($frames)
    {
        if(empty($frames)) $frames = array();
        return $this->set('frames', $frames);
    }



}