<?php

namespace Keiwen\RiotApi\Dto\Rune;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains rune page information.
 */
class RunePageDto extends DtoParent
{

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['slots'] = RuneSlotDto::class;
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


    /**
     * Collection of rune slots associated with the rune page.
     * @return RuneSlotDto[]
     */
    public function getSlots()
    {
        return $this->get('slots', array());
    }


    /**
     * @param RuneSlotDto[] $slots
     * @return static
     */
    public function setSlots(array $slots)
    {
        return $this->set('slots', $slots);
    }


}