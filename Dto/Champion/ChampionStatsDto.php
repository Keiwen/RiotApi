<?php

namespace Keiwen\RiotApi\Dto\Champion;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains champion stats data.
 */
class ChampionStatsDto extends DtoParent
{


    /**
     *
     * @return float
     */
    public function getArmor()
    {
        return $this->get('armor', 0);
    }


    /**
     * @param float $armor
     * @return static
     */
    public function setArmor(float $armor)
    {
        return $this->set('armor', $armor);
    }


    /**
     *
     * @return float
     */
    public function getArmorperlevel()
    {
        return $this->get('armorperlevel', 0);
    }


    /**
     * @param float $armorperlevel
     * @return static
     */
    public function setArmorperlevel(float $armorperlevel)
    {
        return $this->set('armorperlevel', $armorperlevel);
    }


    /**
     *
     * @return float
     */
    public function getAttackdamage()
    {
        return $this->get('attackdamage', 0);
    }


    /**
     * @param float $attackdamage
     * @return static
     */
    public function setAttackdamage(float $attackdamage)
    {
        return $this->set('attackdamage', $attackdamage);
    }


    /**
     *
     * @return float
     */
    public function getAttackdamageperlevel()
    {
        return $this->get('attackdamageperlevel', 0);
    }


    /**
     * @param float $attackdamageperlevel
     * @return static
     */
    public function setAttackdamageperlevel(float $attackdamageperlevel)
    {
        return $this->set('attackdamageperlevel', $attackdamageperlevel);
    }


    /**
     *
     * @return float
     */
    public function getAttackrange()
    {
        return $this->get('attackrange', 0);
    }


    /**
     * @param float $attackrange
     * @return static
     */
    public function setAttackrange(float $attackrange)
    {
        return $this->set('attackrange', $attackrange);
    }


    /**
     *
     * @return float
     */
    public function getAttackspeedoffset()
    {
        return $this->get('attackspeedoffset', 0);
    }


    /**
     * @param float $attackspeedoffset
     * @return static
     */
    public function setAttackspeedoffset(float $attackspeedoffset)
    {
        return $this->set('attackspeedoffset', $attackspeedoffset);
    }


    /**
     *
     * @return float
     */
    public function getAttackspeedperlevel()
    {
        return $this->get('attackspeedperlevel', 0);
    }


    /**
     * @param float $attackspeedperlevel
     * @return static
     */
    public function setAttackspeedperlevel(float $attackspeedperlevel)
    {
        return $this->set('attackspeedperlevel', $attackspeedperlevel);
    }


    /**
     *
     * @return float
     */
    public function getCrit()
    {
        return $this->get('crit', 0);
    }


    /**
     * @param float $crit
     * @return static
     */
    public function setCrit(float $crit)
    {
        return $this->set('crit', $crit);
    }


    /**
     *
     * @return float
     */
    public function getCritperlevel()
    {
        return $this->get('critperlevel', 0);
    }


    /**
     * @param float $critperlevel
     * @return static
     */
    public function setCritperlevel(float $critperlevel)
    {
        return $this->set('critperlevel', $critperlevel);
    }


    /**
     *
     * @return float
     */
    public function getHp()
    {
        return $this->get('hp', 0);
    }


    /**
     * @param float $hp
     * @return static
     */
    public function setHp(float $hp)
    {
        return $this->set('hp', $hp);
    }


    /**
     *
     * @return float
     */
    public function getHpperlevel()
    {
        return $this->get('hpperlevel', 0);
    }


    /**
     * @param float $hpperlevel
     * @return static
     */
    public function setHpperlevel(float $hpperlevel)
    {
        return $this->set('hpperlevel', $hpperlevel);
    }


    /**
     *
     * @return float
     */
    public function getHpregen()
    {
        return $this->get('hpregen', 0);
    }


    /**
     * @param float $hpregen
     * @return static
     */
    public function setHpregen(float $hpregen)
    {
        return $this->set('hpregen', $hpregen);
    }


    /**
     *
     * @return float
     */
    public function getHpregenperlevel()
    {
        return $this->get('hpregenperlevel', 0);
    }


    /**
     * @param float $hpregenperlevel
     * @return static
     */
    public function setHpregenperlevel(float $hpregenperlevel)
    {
        return $this->set('hpregenperlevel', $hpregenperlevel);
    }


    /**
     *
     * @return float
     */
    public function getMovespeed()
    {
        return $this->get('movespeed', 0);
    }


    /**
     * @param float $movespeed
     * @return static
     */
    public function setMovespeed(float $movespeed)
    {
        return $this->set('movespeed', $movespeed);
    }


    /**
     *
     * @return float
     */
    public function getMp()
    {
        return $this->get('mp', 0);
    }


    /**
     * @param float $mp
     * @return static
     */
    public function setMp(float $mp)
    {
        return $this->set('mp', $mp);
    }


    /**
     *
     * @return float
     */
    public function getMpperlevel()
    {
        return $this->get('mpperlevel', 0);
    }


    /**
     * @param float $mpperlevel
     * @return static
     */
    public function setMpperlevel(float $mpperlevel)
    {
        return $this->set('mpperlevel', $mpperlevel);
    }


    /**
     *
     * @return float
     */
    public function getMpregen()
    {
        return $this->get('mpregen', 0);
    }


    /**
     * @param float $mpregen
     * @return static
     */
    public function setMpregen(float $mpregen)
    {
        return $this->set('mpregen', $mpregen);
    }


    /**
     *
     * @return float
     */
    public function getMpregenperlevel()
    {
        return $this->get('mpregenperlevel', 0);
    }


    /**
     * @param float $mpregenperlevel
     * @return static
     */
    public function setMpregenperlevel(float $mpregenperlevel)
    {
        return $this->set('mpregenperlevel', $mpregenperlevel);
    }


    /**
     *
     * @return float
     */
    public function getSpellblock()
    {
        return $this->get('spellblock', 0);
    }


    /**
     * @param float $spellblock
     * @return static
     */
    public function setSpellblock(float $spellblock)
    {
        return $this->set('spellblock', $spellblock);
    }


    /**
     *
     * @return float
     */
    public function getSpellblockperlevel()
    {
        return $this->get('spellblockperlevel', 0);
    }


    /**
     * @param float $spellblockperlevel
     * @return static
     */
    public function setSpellblockperlevel(float $spellblockperlevel)
    {
        return $this->set('spellblockperlevel', $spellblockperlevel);
    }



}