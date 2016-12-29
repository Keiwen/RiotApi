<?php

namespace Keiwen\RiotApi\Dto\Champion;
use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Item\BlockDto;


/**
 * This object contains champion recommended data.
 */
class RecommendedDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['blocks'] = BlockDto::class;
        return $included;
    }


    /**
     *
     * @return BlockDto[]
     */
    public function getBlocks()
    {
        return $this->get('blocks', array());
    }


    /**
     * @param BlockDto[] $blocks
     * @return static
     */
    public function setBlocks($blocks)
    {
        if(empty($blocks)) $blocks = array();
        return $this->set('blocks', $blocks);
    }

    /**
     *
     * @return string
     */
    public function getChampion()
    {
        return $this->get('champion', '');
    }


    /**
     * @param string $champion
     * @return static
     */
    public function setChampion(string $champion)
    {
        return $this->set('champion', $champion);
    }

    /**
     *
     * @return string
     */
    public function getMap()
    {
        return $this->get('map', '');
    }


    /**
     * @param string $map
     * @return static
     */
    public function setMap(string $map)
    {
        return $this->set('map', $map);
    }

    /**
     *
     * @return string
     */
    public function getMode()
    {
        return $this->get('mode', '');
    }


    /**
     * @param string $mode
     * @return static
     */
    public function setMode(string $mode)
    {
        return $this->set('mode', $mode);
    }

    /**
     *
     * @return bool
     */
    public function getPriority()
    {
        return $this->get('priority', false);
    }


    /**
     * @param bool $priority
     * @return static
     */
    public function setPriority(bool $priority)
    {
        return $this->set('priority', $priority);
    }

    /**
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->get('title', '');
    }


    /**
     * @param string $title
     * @return static
     */
    public function setTitle(string $title)
    {
        return $this->set('title', $title);
    }

    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->get('type', '');
    }


    /**
     * @param string $type
     * @return static
     */
    public function setType(string $type)
    {
        return $this->set('type', $type);
    }


}