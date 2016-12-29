<?php

namespace Keiwen\RiotApi\Dto\Champion;
use Keiwen\RiotApi\Dto\Data\ImageDto;
use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Spell\ChampionSpellDto;


/**
 * This object contains champion data.
 */
class ChampionDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['image'] = ImageDto::class;
        $included['info'] = ChampionBriefDto::class;
        $included['passive'] = ChampionPassiveDto::class;
        $included['recommended'] = RecommendedDto::class;
        $included['skins'] = ChampionSkinDto::class;
        $included['spells'] = ChampionSpellDto::class;
        $included['stats'] = ChampionStatsDto::class;
        return $included;
    }



    /**
     *
     * @return string[]
     */
    public function getAllytips()
    {
        return $this->get('allytips', array());
    }


    /**
     * @param string[] $allytips
     * @return static
     */
    public function setAllytips(array $allytips)
    {
        return $this->set('allytips', $allytips);
    }

    /**
     *
     * @return string
     */
    public function getBlurb()
    {
        return $this->get('blurb', '');
    }


    /**
     * @param string $blurb
     * @return static
     */
    public function setBlurb(string $blurb)
    {
        return $this->set('blurb', $blurb);
    }

    /**
     *
     * @return string[]
     */
    public function getEnemytips()
    {
        return $this->get('enemytips', array());
    }


    /**
     * @param string[] $enemytips
     * @return static
     */
    public function setEnemytips(array $enemytips)
    {
        return $this->set('enemytips', $enemytips);
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
     * @return ChampionBriefDto
     */
    public function getInfo()
    {
        return $this->get('info', new ChampionBriefDto());
    }


    /**
     * @param ChampionBriefDto $info
     * @return static
     */
    public function setInfo(ChampionBriefDto $info)
    {
        return $this->set('info', $info);
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
     * @return string
     */
    public function getLore()
    {
        return $this->get('lore', '');
    }


    /**
     * @param string $lore
     * @return static
     */
    public function setLore(string $lore)
    {
        return $this->set('lore', $lore);
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
    public function getPartype()
    {
        return $this->get('partype', '');
    }


    /**
     * @param string $partype
     * @return static
     */
    public function setPartype(string $partype)
    {
        return $this->set('partype', $partype);
    }

    /**
     *
     * @return ChampionPassiveDto
     */
    public function getPassive()
    {
        return $this->get('passive', new ChampionPassiveDto());
    }


    /**
     * @param ChampionPassiveDto $passive
     * @return static
     */
    public function setPassive(ChampionPassiveDto $passive)
    {
        return $this->set('passive', $passive);
    }

    /**
     *
     * @return RecommendedDto[]
     */
    public function getRecommended()
    {
        return $this->get('recommended', array());
    }


    /**
     * @param RecommendedDto[] $recommended
     * @return static
     */
    public function setRecommended($recommended)
    {
        if(empty($recommended)) $recommended = array();
        return $this->set('recommended', $recommended);
    }

    /**
     *
     * @return ChampionSkinDto[]
     */
    public function getSkins()
    {
        return $this->get('skins', array());
    }


    /**
     * @param ChampionSkinDto[] $skins
     * @return static
     */
    public function setSkins($skins)
    {
        if(empty($skins)) $skins = array();
        return $this->set('skins', $skins);
    }

    /**
     *
     * @return ChampionSpellDto[]
     */
    public function getSpells()
    {
        return $this->get('spells', array());
    }


    /**
     * @param ChampionSpellDto[] $spells
     * @return static
     */
    public function setSpells($spells)
    {
        if(empty($spells)) $spells = array();
        return $this->set('spells', $spells);
    }

    /**
     *
     * @return ChampionStatsDto
     */
    public function getStats()
    {
        return $this->get('stats', new ChampionStatsDto());
    }


    /**
     * @param ChampionStatsDto $stats
     * @return static
     */
    public function setStats(ChampionStatsDto $stats)
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



}