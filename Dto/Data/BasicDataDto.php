<?php

namespace Keiwen\RiotApi\Dto\Data;
use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Item\ItemGoldDto;


/**
 * This object contains basic data.
 */
class BasicDataDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['gold'] = ItemGoldDto::class;
        $included['image'] = ImageDto::class;
        $included['rune'] = MetaDataDto::class;
        $included['stats'] = BasicDataStatsDto::class;
        return $included;
    }



    /**
     *
     * @return string
     */
    public function getColloq()
    {
        return $this->get('colloq', '');
    }


    /**
     * @param string $colloq
     * @return static
     */
    public function setColloq(string $colloq)
    {
        return $this->set('colloq', $colloq);
    }

    /**
     *
     * @return bool
     */
    public function getConsumeOnFull()
    {
        return $this->get('consumeOnFull', false);
    }


    /**
     * @param bool $consumeOnFull
     * @return static
     */
    public function setConsumeOnFull(bool $consumeOnFull)
    {
        return $this->set('consumeOnFull', $consumeOnFull);
    }

    /**
     *
     * @return bool
     */
    public function getConsumed()
    {
        return $this->get('consumed', false);
    }


    /**
     * @param bool $consumed
     * @return static
     */
    public function setConsumed(bool $consumed)
    {
        return $this->set('consumed', $consumed);
    }

    /**
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->get('depth', 0);
    }


    /**
     * @param int $depth
     * @return static
     */
    public function setDepth(int $depth)
    {
        return $this->set('depth', $depth);
    }

    /**
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->get('description', '');
    }


    /**
     * @param string $description
     * @return static
     */
    public function setDescription(string $description)
    {
        return $this->set('description', $description);
    }


    /**
     *
     * @return string[]
     */
    public function getFrom()
    {
        return $this->get('from', array());
    }


    /**
     * @param string[] $from
     * @return static
     */
    public function setFrom(array $from)
    {
        return $this->set('from', $from);
    }

    /**
     * Data Dragon includes the gold field for basic data, which is shared by both rune and item.
     * However, only items have a gold field on them, representing their gold cost in the store.
     * Since runes are not sold in the store, they have no gold cost.
     * @return ItemGoldDto
     */
    public function getGold()
    {
        return $this->get('gold', new ItemGoldDto());
    }


    /**
     * @param ItemGoldDto $gold
     * @return static
     */
    public function setGold(ItemGoldDto $gold)
    {
        return $this->set('gold', $gold);
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
     * @return bool
     */
    public function getHideFromAll()
    {
        return $this->get('hideFromAll', false);
    }


    /**
     * @param bool $hideFromAll
     * @return static
     */
    public function setHideFromAll(bool $hideFromAll)
    {
        return $this->set('hideFromAll', $hideFromAll);
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

    /**
     *
     * @return ImageDto
     */
    public function getImage()
    {
        return $this->get('image', new ImageDto());
    }


    /**
     * @param ImageDto $image
     * @return static
     */
    public function setImage(ImageDto $image)
    {
        return $this->set('image', $image);
    }

    /**
     *
     * @return bool
     */
    public function getInStore()
    {
        return $this->get('inStore', false);
    }


    /**
     * @param bool $inStore
     * @return static
     */
    public function setInStore(bool $inStore)
    {
        return $this->set('inStore', $inStore);
    }

    /**
     *
     * @return string[]
     */
    public function getInto()
    {
        return $this->get('into', array());
    }


    /**
     * @param string[] $into
     * @return static
     */
    public function setInto(array $into)
    {
        return $this->set('into', $into);
    }

    /**
     * Map[string, boolean]
     * @return boolean[]
     */
    public function getMaps()
    {
        return $this->get('maps', array());
    }


    /**
     * @param boolean[] $maps
     * @return static
     */
    public function setMaps(array $maps)
    {
        return $this->set('maps', $maps);
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
     * @return string
     */
    public function getPlaintext()
    {
        return $this->get('plaintext', '');
    }


    /**
     * @param string $plaintext
     * @return static
     */
    public function setPlaintext(string $plaintext)
    {
        return $this->set('plaintext', $plaintext);
    }

    /**
     *
     * @return string
     */
    public function getRequiredChampion()
    {
        return $this->get('requiredChampion', '');
    }


    /**
     * @param string $requiredChampion
     * @return static
     */
    public function setRequiredChampion(string $requiredChampion)
    {
        return $this->set('requiredChampion', $requiredChampion);
    }

    /**
     *
     * @return MetaDataDto
     */
    public function getRune()
    {
        return $this->get('rune', new MetaDataDto());
    }


    /**
     * @param MetaDataDto $rune
     * @return static
     */
    public function setRune(MetaDataDto $rune)
    {
        return $this->set('rune', $rune);
    }

    /**
     *
     * @return string
     */
    public function getSanitizedDescription()
    {
        return $this->get('sanitizedDescription', '');
    }


    /**
     * @param string $sanitizedDescription
     * @return static
     */
    public function setSanitizedDescription(string $sanitizedDescription)
    {
        return $this->set('sanitizedDescription', $sanitizedDescription);
    }

    /**
     *
     * @return int
     */
    public function getSpecialRecipe()
    {
        return $this->get('specialRecipe', 0);
    }


    /**
     * @param int $specialRecipe
     * @return static
     */
    public function setSpecialRecipe(int $specialRecipe)
    {
        return $this->set('specialRecipe', $specialRecipe);
    }

    /**
     *
     * @return int
     */
    public function getStacks()
    {
        return $this->get('stacks', 0);
    }


    /**
     * @param int $stacks
     * @return static
     */
    public function setStacks(int $stacks)
    {
        return $this->set('stacks', $stacks);
    }

    /**
     *
     * @return BasicDataStatsDto
     */
    public function getStats()
    {
        return $this->get('stats', new BasicDataStatsDto());
    }


    /**
     * @param BasicDataStatsDto $stats
     * @return static
     */
    public function setStats(BasicDataStatsDto $stats)
    {
        return $this->set('stats', $stats);
    }

    /**
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->get('tags', array());
    }


    /**
     * @param string[] $tags
     * @return static
     */
    public function setTags(array $tags)
    {
        return $this->set('tags', $tags);
    }



}