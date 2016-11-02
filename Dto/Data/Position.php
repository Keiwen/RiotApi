<?php

namespace Keiwen\RiotApi\Dto\Data;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains participant frame position information
 */
class PositionDto extends DtoParent
{


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