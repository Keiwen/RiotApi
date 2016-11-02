<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains match player information
 */
class SummonerPreviewDto extends DtoParent
{

    /**
     * Match history URI
     * @return string
     */
    public function getMatchHistoryUri()
    {
        return $this->get('matchHistoryUri', '');
    }


    /**
     * @param string $matchHistoryUri
     * @return static
     */
    public function setMatchHistoryUri(string $matchHistoryUri)
    {
        return $this->set('matchHistoryUri', $matchHistoryUri);
    }

    /**
     * Profile icon ID
     * @return int
     */
    public function getProfileIcon()
    {
        return $this->get('profileIcon', 0);
    }


    /**
     * @param int $profileIcon
     * @return static
     */
    public function setProfileIcon(int $profileIcon)
    {
        return $this->set('profileIcon', $profileIcon);
    }

    /**
     * Summoner ID
     * @return int
     */
    public function getSummonerId()
    {
        return $this->get('summonerId', 0);
    }


    /**
     * @param int $summonerId
     * @return static
     */
    public function setSummonerId(int $summonerId)
    {
        return $this->set('summonerId', $summonerId);
    }

    /**
     * Summoner name
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
    public function setSummonerName(string $summonerName)
    {
        return $this->set('summonerName', $summonerName);
    }


}