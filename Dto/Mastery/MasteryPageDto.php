<?php

namespace Keiwen\RiotApi\Dto\Mastery;
use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Player\PlayerMasteryDto;


/**
 * This object contains mastery page information.
 */
class MasteryPageDto extends DtoParent
{

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['masteries'] = PlayerMasteryDto::class;
        return $included;
    }


    /**
     * Indicates if the mastery page is the current mastery page.
     * @return bool
     */
    public function getCurrent()
    {
        return $this->get('current', false);
    }


    /**
     * @param bool $current
     * @return static
     */
    public function setCurrent(bool $current)
    {
        return $this->set('current', $current);
    }

    /**
     * Mastery page ID.
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
     * Collection of masteries associated with the mastery page.
     * @return PlayerMasteryDto[]
     */
    public function getMasteries()
    {
        return $this->get('masteries', array());
    }


    /**
     * @param PlayerMasteryDto[] $masteries
     * @return static
     */
    public function setMasteries($masteries)
    {
        if(empty($masteries)) $masteries = array();
        return $this->set('masteries', $masteries);
    }

    /**
     * Mastery page name.
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


}