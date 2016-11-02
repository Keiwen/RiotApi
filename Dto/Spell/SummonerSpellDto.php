<?php

namespace Keiwen\RiotApi\Dto\Spell;


/**
 * This object contains summoner spell data.
 */
class SummonerSpellDto extends SpellDto
{


    /**
     *
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
     *
     * @return string[]
     */
    public function getModes()
    {
        return $this->get('modes', array());
    }


    /**
     * @param string[] $modes
     * @return static
     */
    public function setModes(array $modes)
    {
        return $this->set('modes', $modes);
    }

    /**
     *
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