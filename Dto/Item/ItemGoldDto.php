<?php

namespace Keiwen\RiotApi\Dto\Item;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains item gold data.
 */
class ItemGoldDto extends DtoParent
{

    /**
     *
     * @return int
     */
    public function getBase()
    {
        return $this->get('base', 0);
    }


    /**
     * @param int $base
     * @return static
     */
    public function setBase(int $base)
    {
        return $this->set('base', $base);
    }

    /**
     *
     * @return bool
     */
    public function getPurchasable()
    {
        return $this->get('purchasable', false);
    }


    /**
     * @param bool $purchasable
     * @return static
     */
    public function setPurchasable(bool $purchasable)
    {
        return $this->set('purchasable', $purchasable);
    }

    /**
     *
     * @return int
     */
    public function getSell()
    {
        return $this->get('sell', 0);
    }


    /**
     * @param int $sell
     * @return static
     */
    public function setSell(int $sell)
    {
        return $this->set('sell', $sell);
    }

    /**
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->get('total', 0);
    }


    /**
     * @param int $total
     * @return static
     */
    public function setTotal(int $total)
    {
        return $this->set('total', $total);
    }

}