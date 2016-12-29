<?php

namespace Keiwen\RiotApi\Dto\Spell;
use Keiwen\RiotApi\Dto\Data\ImageDto;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains spell data.
 */
class SpellDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['image'] = ImageDto::class;
        $included['leveltip'] = LevelTipDto::class;
        $included['vars'] = SpellVarsDto::class;
        return $included;
    }


    /**
     *
     * @return float[]
     */
    public function getCooldown()
    {
        return $this->get('cooldown', array());
    }


    /**
     * @param float[] $cooldown
     * @return static
     */
    public function setCooldown(array $cooldown)
    {
        return $this->set('cooldown', $cooldown);
    }

    /**
     *
     * @return string
     */
    public function getCooldownBurn()
    {
        return $this->get('cooldownBurn', '');
    }


    /**
     * @param string $cooldownBurn
     * @return static
     */
    public function setCooldownBurn(string $cooldownBurn)
    {
        return $this->set('cooldownBurn', $cooldownBurn);
    }

    /**
     *
     * @return int[]
     */
    public function getCost()
    {
        return $this->get('cost', array());
    }


    /**
     * @param int[] $cost
     * @return static
     */
    public function setCost(array $cost)
    {
        return $this->set('cost', $cost);
    }

    /**
     *
     * @return string
     */
    public function getCostBurn()
    {
        return $this->get('costBurn', '');
    }


    /**
     * @param string $costBurn
     * @return static
     */
    public function setCostBurn(string $costBurn)
    {
        return $this->set('costBurn', $costBurn);
    }

    /**
     *
     * @return string
     */
    public function getCostType()
    {
        return $this->get('costType', '');
    }


    /**
     * @param string $costType
     * @return static
     */
    public function setCostType(string $costType)
    {
        return $this->set('costType', $costType);
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
     * This field is a List of List of Double.
     * @return float[]
     */
    public function getEffect()
    {
        return $this->get('effect', array());
    }


    /**
     * @param float[] $effect
     * @return static
     */
    public function setEffect(array $effect)
    {
        return $this->set('effect', $effect);
    }

    /**
     *
     * @return string[]
     */
    public function getEffectBurn()
    {
        return $this->get('effectBurn', array());
    }


    /**
     * @param string[] $effectBurn
     * @return static
     */
    public function setEffectBurn(array $effectBurn)
    {
        return $this->set('effectBurn', $effectBurn);
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
     * @return string
     */
    public function getKey()
    {
        return $this->get('key', '');
    }


    /**
     * @param string $key
     * @return static
     */
    public function setKey(string $key)
    {
        return $this->set('key', $key);
    }

    /**
     *
     * @return LevelTipDto
     */
    public function getLeveltip()
    {
        return $this->get('leveltip', new LevelTipDto());
    }


    /**
     * @param LevelTipDto $leveltip
     * @return static
     */
    public function setLeveltip(LevelTipDto $leveltip)
    {
        return $this->set('leveltip', $leveltip);
    }

    /**
     *
     * @return int
     */
    public function getMaxrank()
    {
        return $this->get('maxrank', 0);
    }


    /**
     * @param int $maxrank
     * @return static
     */
    public function setMaxrank(int $maxrank)
    {
        return $this->set('maxrank', $maxrank);
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
     * This field is either a List of Integer or the String 'self' for spells that target one's own champion.
     * @return int[]|string
     */
    public function getRange()
    {
        return $this->get('range', 'self');
    }


    /**
     * @param int[]|string $range
     * @return static
     */
    public function setRange($range)
    {
        return $this->set('range', $range);
    }

    /**
     *
     * @return string
     */
    public function getRangeBurn()
    {
        return $this->get('rangeBurn', '');
    }


    /**
     * @param string $rangeBurn
     * @return static
     */
    public function setRangeBurn(string $rangeBurn)
    {
        return $this->set('rangeBurn', $rangeBurn);
    }

    /**
     *
     * @return string
     */
    public function getResource()
    {
        return $this->get('resource', '');
    }


    /**
     * @param string $resource
     * @return static
     */
    public function setResource(string $resource)
    {
        return $this->set('resource', $resource);
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
     * @return string
     */
    public function getSanitizedTooltip()
    {
        return $this->get('sanitizedTooltip', '');
    }


    /**
     * @param string $sanitizedTooltip
     * @return static
     */
    public function setSanitizedTooltip(string $sanitizedTooltip)
    {
        return $this->set('sanitizedTooltip', $sanitizedTooltip);
    }

    /**
     *
     * @return string
     */
    public function getTooltip()
    {
        return $this->get('tooltip', '');
    }


    /**
     * @param string $tooltip
     * @return static
     */
    public function setTooltip(string $tooltip)
    {
        return $this->set('tooltip', $tooltip);
    }

    /**
     *
     * @return SpellVarsDto[]
     */
    public function getVars()
    {
        return $this->get('vars', array());
    }


    /**
     * @param SpellVarsDto[] $vars
     * @return static
     */
    public function setVars($vars)
    {
        if(empty($vars)) $vars = array();
        return $this->set('vars', $vars);
    }


}