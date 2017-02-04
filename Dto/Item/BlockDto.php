<?php

namespace Keiwen\RiotApi\Dto\Item;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains champion recommended block data.
 */
class BlockDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['items'] = BlockItemDto::class;
        return $included;
    }

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjectMapList()
    {
        $included = parent::includedJsonObjectMapList();
        $included[] = 'items';
        return $included;
    }


    /**
     *
     * @return BlockItemDto[]
     */
    public function getItems()
    {
        return $this->get('items', array());
    }


    /**
     * @param BlockItemDto[] $items
     * @return static
     */
    public function setItems(array $items)
    {
        return $this->set('items', $items);
    }


    /**
     *
     * @return bool
     */
    public function getRecMath()
    {
        return $this->get('recMath', false);
    }


    /**
     * @param bool $recMath
     * @return static
     */
    public function setRecMath(bool $recMath)
    {
        return $this->set('recMath', $recMath);
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