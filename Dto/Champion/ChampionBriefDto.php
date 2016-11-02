<?php

namespace Keiwen\RiotApi\Dto\Champion;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains champion stats.
 */
class ChampionBriefDto extends DtoParent
{

    /**
     *
     * @return int
     */
    public function getAttack()
    {
        return $this->get('attack', 0);
    }


    /**
     * @param int $attack
     * @return static
     */
    public function setAttack(int $attack)
    {
        return $this->set('attack', $attack);
    }

    /**
     *
     * @return int
     */
    public function getDefense()
    {
        return $this->get('defense', 0);
    }


    /**
     * @param int $defense
     * @return static
     */
    public function setDefense(int $defense)
    {
        return $this->set('defense', $defense);
    }

    /**
     *
     * @return int
     */
    public function getDifficulty()
    {
        return $this->get('difficulty', 0);
    }


    /**
     * @param int $difficulty
     * @return static
     */
    public function setDifficulty(int $difficulty)
    {
        return $this->set('difficulty', $difficulty);
    }

    /**
     *
     * @return int
     */
    public function getMagic()
    {
        return $this->get('magic', 0);
    }


    /**
     * @param int $magic
     * @return static
     */
    public function setMagic(int $magic)
    {
        return $this->set('magic', $magic);
    }



}