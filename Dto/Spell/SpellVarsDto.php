<?php

namespace Keiwen\RiotApi\Dto\Spell;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains spell vars data.
 */
class SpellVarsDto extends DtoParent
{


    /**
     *
     * @return float[]
     */
    public function getCoeff()
    {
        return $this->get('coeff', '0');
    }

    /**
     * @param float[] $coeff
     * @return static
     */
    public function setCoeff(array $coeff)
    {
        return $this->set('coeff', $coeff);
    }


    /**
     *
     * @return string
     */
    public function getDyn()
    {
        return $this->get('dyn', '');
    }


    /**
     * @param string $dyn
     * @return static
     */
    public function setDyn(string $dyn)
    {
        return $this->set('dyn', $dyn);
    }


    /**
     *
     * @return string
     */
    public function getKey()
    {
        return $this->get('key', '');
    }


    /**
     * @param string $key
     * @return static
     */
    public function setKey(string $key)
    {
        return $this->set('key', $key);
    }


    /**
     *
     * @return string
     */
    public function getLink()
    {
        return $this->get('link', '');
    }


    /**
     * @param string $link
     * @return static
     */
    public function setLink(string $link)
    {
        return $this->set('link', $link);
    }


    /**
     *
     * @return string
     */
    public function getRanksWith()
    {
        return $this->get('ranksWith', '');
    }


    /**
     * @param string $ranksWith
     * @return static
     */
    public function setRanksWith(string $ranksWith)
    {
        return $this->set('ranksWith', $ranksWith);
    }




}