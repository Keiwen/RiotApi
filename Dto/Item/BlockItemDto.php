<?php

namespace Keiwen\RiotApi\Dto\Item;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains champion recommended block item data.
 */
class BlockItemDto extends DtoParent
{


    /**
     *
     * @return int
     */
    public function getCount()
    {
        return $this->get('count', 0);
    }


    /**
     * @param int $count
     * @return static
     */
    public function setCount(int $count)
    {
        return $this->set('count', $count);
    }


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



}