<?php

namespace Keiwen\RiotApi\Dto\Data;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains image data.
 */
class ImageDto extends DtoParent
{


    /**
     *
     * @return string
     */
    public function getFull()
    {
        return $this->get('full', '');
    }


    /**
     * @param string $full
     * @return static
     */
    public function setFull(string $full)
    {
        return $this->set('full', $full);
    }

    /**
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->get('group', '');
    }


    /**
     * @param string $group
     * @return static
     */
    public function setGroup(string $group)
    {
        return $this->set('group', $group);
    }

    /**
     *
     * @return int
     */
    public function getH()
    {
        return $this->get('h', 0);
    }


    /**
     * @param int $h
     * @return static
     */
    public function setH(int $h)
    {
        return $this->set('h', $h);
    }

    /**
     *
     * @return string
     */
    public function getSprite()
    {
        return $this->get('sprite', '');
    }


    /**
     * @param string $sprite
     * @return static
     */
    public function setSprite(string $sprite)
    {
        return $this->set('sprite', $sprite);
    }

    /**
     *
     * @return int
     */
    public function getW()
    {
        return $this->get('w', 0);
    }


    /**
     * @param int $w
     * @return static
     */
    public function setW(int $w)
    {
        return $this->set('w', $w);
    }

    /**
     *
     * @return int
     */
    public function getX()
    {
        return $this->get('x', 0);
    }


    /**
     * @param int $x
     * @return static
     */
    public function setX(int $x)
    {
        return $this->set('x', $x);
    }

    /**
     *
     * @return int
     */
    public function getY()
    {
        return $this->get('y', 0);
    }


    /**
     * @param int $y
     * @return static
     */
    public function setY(int $y)
    {
        return $this->set('y', $y);
    }



}