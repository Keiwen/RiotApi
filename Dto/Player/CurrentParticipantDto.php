<?php

namespace Keiwen\RiotApi\Dto\Player;



/**
 *
 */
class CurrentParticipantDto extends PlayerDto
{

    /**
     * indicating whether or not this participant is a bot
     * @return bool
     */
    public function getBot()
    {
        return $this->get('bot', false);
    }

    /**
     * @param bool $bot
     * @return static
     */
    public function setBot(bool $bot) {
        return $this->set('bot', $bot);
    }
    

    /**
     * The ID of the profile icon used by this participant
     * @return int
     */
    public function getProfileIconId()
    {
        return $this->get('profileIconId', 0);
    }

    /**
     * @param int $profileIconId
     * @return static
     */
    public function setProfileIconId(int $profileIconId) {
        return $this->set('profileIconId', $profileIconId);
    }

    /**
     * The summoner name of this participant
     * @return string
     */
    public function getSummonerName()
    {
        return $this->get('summonerName', '');
    }

    /**
     * @param string $summonerName
     * @return static
     */
    public function setSummonerName(string $summonerName) {
        return $this->set('summonerName', $summonerName);
    }


}