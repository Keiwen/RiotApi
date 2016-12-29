<?php

namespace Keiwen\RiotApi\Dto\Spell;
use Keiwen\RiotApi\Dto\Data\ImageDto;


/**
 * This object contains champion spell data.
 */
class ChampionSpellDto extends SpellDto
{



    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['altimages'] = ImageDto::class;
        return $included;
    }


    /**
     *
     * @return ImageDto[]
     */
    public function getAltimages()
    {
        return $this->get('altimages', array());
    }


    /**
     * @param ImageDto[] $altimages
     * @return static
     */
    public function setAltimages($altimages)
    {
        if(empty($altimages)) $altimages = array();
        return $this->set('altimages', $altimages);
    }



}