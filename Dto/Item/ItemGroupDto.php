<?php

namespace Keiwen\RiotApi\Dto\Item;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains item group data.
 */
class ItemGroupDto extends DtoParent
{

    /**
     *
     * @return string
     */
    public function getMaxGroupOwnable()
    {
        return $this->get('MaxGroupOwnable', '');
    }


    /**
     * @param string $MaxGroupOwnable
     * @return static
     */
    public function setMaxGroupOwnable(string $MaxGroupOwnable)
    {
        return $this->set('MaxGroupOwnable', $MaxGroupOwnable);
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


}