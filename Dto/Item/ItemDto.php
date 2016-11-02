<?php

namespace Keiwen\RiotApi\Dto\Item;
use Keiwen\RiotApi\Dto\Data\BasicDataDto;


/**
 * This object contains item data.
 */
class ItemDto extends BasicDataDto
{


    /**
     * Map[string, string]
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


}