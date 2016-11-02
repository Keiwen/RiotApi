<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains summoner information.
 */
class SummonerDto extends DtoParent
{

    /**
     * Summoner ID.
     * @return int
     */
    public function getId()
    {
        return $this->get('id', 0);
    }


    /**
     * @param int $id
     * @return static
     */
    public function setId(int $id)
    {
        return $this->set('id', $id);
    }

    /**
     * Summoner name.
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
     * ID of the summoner icon associated with the summoner.
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
    public function setProfileIconId(int $profileIconId)
    {
        return $this->set('profileIconId', $profileIconId);
    }

    /**
     * Date summoner was last modified specified as epoch milliseconds.
     * The following events will update this timestamp: profile icon change,
     * playing the tutorial or advanced tutorial, finishing a game, summoner name change
     * @return int
     */
    public function getRevisionDate()
    {
        return $this->get('revisionDate', 0);
    }


    /**
     * @param int $revisionDate
     * @return static
     */
    public function setRevisionDate(int $revisionDate)
    {
        return $this->set('revisionDate', $revisionDate);
    }

    /**
     * Summoner level associated with the summoner.
     * @return int
     */
    public function getSummonerLevel()
    {
        return $this->get('summonerLevel', 0);
    }


    /**
     * @param int $summonerLevel
     * @return static
     */
    public function setSummonerLevel(int $summonerLevel)
    {
        return $this->set('summonerLevel', $summonerLevel);
    }

}