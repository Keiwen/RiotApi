<?php

namespace Keiwen\RiotApi\Dto\Player;
use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Summoner\SummonerPreviewDto;


/**
 * This object contains participant identity information
 */
class ParticipantIdentityDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['player'] = SummonerPreviewDto::class;
        return $included;
    }


    /**
     * Participant ID
     * @return int
     */
    public function getParticipantId()
    {
        return $this->get('participantId', 0);
    }


    /**
     * @param int $participantId
     * @return static
     */
    public function setParticipantId(int $participantId)
    {
        return $this->set('participantId', $participantId);
    }

    /**
     * Player information
     * @return SummonerPreviewDto
     */
    public function getPlayer()
    {
        return $this->get('player', new SummonerPreviewDto());
    }


    /**
     * @param SummonerPreviewDto $player
     * @return static
     */
    public function setPlayer(SummonerPreviewDto $player)
    {
        return $this->set('player', $player);
    }


}