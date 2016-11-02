<?php

namespace Keiwen\RiotApi\Dto\Champion;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains champion skin data.
 */
class ChampionSkinDto extends DtoParent
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
     * @return string
     */
    public function getName()
    {
        return $this->get('name', '');
    }


    /**
     * @param string $name
     * @return static
     */
    public function setName(string $name)
    {
        return $this->set('name', $name);
    }


    /**
     *
     * @return int
     */
    public function getNum()
    {
        return $this->get('num', 0);
    }


    /**
     * @param int $num
     * @return static
     */
    public function setNum(int $num)
    {
        return $this->set('num', $num);
    }



}