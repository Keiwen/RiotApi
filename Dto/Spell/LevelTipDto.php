<?php

namespace Keiwen\RiotApi\Dto\Spell;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains level tip data.
 */
class LevelTipDto extends DtoParent
{


    /**
     *
     * @return string[]
     */
    public function getEffect()
    {
        return $this->get('effect', array());
    }


    /**
     * @param string[] $effect
     * @return static
     */
    public function setEffect(array $effect)
    {
        return $this->set('effect', $effect);
    }


    /**
     *
     * @return string[]
     */
    public function getLabel()
    {
        return $this->get('label', array());
    }


    /**
     * @param string[] $label
     * @return static
     */
    public function setLabel(array $label)
    {
        return $this->set('label', $label);
    }




}