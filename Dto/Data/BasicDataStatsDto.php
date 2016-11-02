<?php

namespace Keiwen\RiotApi\Dto\Data;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains basic data stats.
 */
class BasicDataStatsDto extends DtoParent
{

    /**
     *
     * @return float
     */
    public function getFlatArmorMod()
    {
        return $this->get('FlatArmorMod', 0);
    }


    /**
     * @param float $FlatArmorMod
     * @return static
     */
    public function setFlatArmorMod(float $FlatArmorMod)
    {
        return $this->set('FlatArmorMod', $FlatArmorMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatAttackSpeedMod()
    {
        return $this->get('FlatAttackSpeedMod', 0);
    }


    /**
     * @param float $FlatAttackSpeedMod
     * @return static
     */
    public function setFlatAttackSpeedMod(float $FlatAttackSpeedMod)
    {
        return $this->set('FlatAttackSpeedMod', $FlatAttackSpeedMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatBlockMod()
    {
        return $this->get('FlatBlockMod', 0);
    }


    /**
     * @param float $FlatBlockMod
     * @return static
     */
    public function setFlatBlockMod(float $FlatBlockMod)
    {
        return $this->set('FlatBlockMod', $FlatBlockMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatCritChanceMod()
    {
        return $this->get('FlatCritChanceMod', 0);
    }


    /**
     * @param float $FlatCritChanceMod
     * @return static
     */
    public function setFlatCritChanceMod(float $FlatCritChanceMod)
    {
        return $this->set('FlatCritChanceMod', $FlatCritChanceMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatCritDamageMod()
    {
        return $this->get('FlatCritDamageMod', 0);
    }


    /**
     * @param float $FlatCritDamageMod
     * @return static
     */
    public function setFlatCritDamageMod(float $FlatCritDamageMod)
    {
        return $this->set('FlatCritDamageMod', $FlatCritDamageMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatEXPBonus()
    {
        return $this->get('FlatEXPBonus', 0);
    }


    /**
     * @param float $FlatEXPBonus
     * @return static
     */
    public function setFlatEXPBonus(float $FlatEXPBonus)
    {
        return $this->set('FlatEXPBonus', $FlatEXPBonus);
    }

    /**
     *
     * @return float
     */
    public function getFlatEnergyPoolMod()
    {
        return $this->get('FlatEnergyPoolMod', 0);
    }


    /**
     * @param float $FlatEnergyPoolMod
     * @return static
     */
    public function setFlatEnergyPoolMod(float $FlatEnergyPoolMod)
    {
        return $this->set('FlatEnergyPoolMod', $FlatEnergyPoolMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatEnergyRegenMod()
    {
        return $this->get('FlatEnergyRegenMod', 0);
    }


    /**
     * @param float $FlatEnergyRegenMod
     * @return static
     */
    public function setFlatEnergyRegenMod(float $FlatEnergyRegenMod)
    {
        return $this->set('FlatEnergyRegenMod', $FlatEnergyRegenMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatHPPoolMod()
    {
        return $this->get('FlatHPPoolMod', 0);
    }


    /**
     * @param float $FlatHPPoolMod
     * @return static
     */
    public function setFlatHPPoolMod(float $FlatHPPoolMod)
    {
        return $this->set('FlatHPPoolMod', $FlatHPPoolMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatHPRegenMod()
    {
        return $this->get('FlatHPRegenMod', 0);
    }


    /**
     * @param float $FlatHPRegenMod
     * @return static
     */
    public function setFlatHPRegenMod(float $FlatHPRegenMod)
    {
        return $this->set('FlatHPRegenMod', $FlatHPRegenMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatMPPoolMod()
    {
        return $this->get('FlatMPPoolMod', 0);
    }


    /**
     * @param float $FlatMPPoolMod
     * @return static
     */
    public function setFlatMPPoolMod(float $FlatMPPoolMod)
    {
        return $this->set('FlatMPPoolMod', $FlatMPPoolMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatMPRegenMod()
    {
        return $this->get('FlatMPRegenMod', 0);
    }


    /**
     * @param float $FlatMPRegenMod
     * @return static
     */
    public function setFlatMPRegenMod(float $FlatMPRegenMod)
    {
        return $this->set('FlatMPRegenMod', $FlatMPRegenMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatMagicDamageMod()
    {
        return $this->get('FlatMagicDamageMod', 0);
    }


    /**
     * @param float $FlatMagicDamageMod
     * @return static
     */
    public function setFlatMagicDamageMod(float $FlatMagicDamageMod)
    {
        return $this->set('FlatMagicDamageMod', $FlatMagicDamageMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatMovementSpeedMod()
    {
        return $this->get('FlatMovementSpeedMod', 0);
    }


    /**
     * @param float $FlatMovementSpeedMod
     * @return static
     */
    public function setFlatMovementSpeedMod(float $FlatMovementSpeedMod)
    {
        return $this->set('FlatMovementSpeedMod', $FlatMovementSpeedMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatPhysicalDamageMod()
    {
        return $this->get('FlatPhysicalDamageMod', 0);
    }


    /**
     * @param float $FlatPhysicalDamageMod
     * @return static
     */
    public function setFlatPhysicalDamageMod(float $FlatPhysicalDamageMod)
    {
        return $this->set('FlatPhysicalDamageMod', $FlatPhysicalDamageMod);
    }

    /**
     *
     * @return float
     */
    public function getFlatSpellBlockMod()
    {
        return $this->get('FlatSpellBlockMod', 0);
    }


    /**
     * @param float $FlatSpellBlockMod
     * @return static
     */
    public function setFlatSpellBlockMod(float $FlatSpellBlockMod)
    {
        return $this->set('FlatSpellBlockMod', $FlatSpellBlockMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentArmorMod()
    {
        return $this->get('PercentArmorMod', 0);
    }


    /**
     * @param float $PercentArmorMod
     * @return static
     */
    public function setPercentArmorMod(float $PercentArmorMod)
    {
        return $this->set('PercentArmorMod', $PercentArmorMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentAttackSpeedMod()
    {
        return $this->get('PercentAttackSpeedMod', 0);
    }


    /**
     * @param float $PercentAttackSpeedMod
     * @return static
     */
    public function setPercentAttackSpeedMod(float $PercentAttackSpeedMod)
    {
        return $this->set('PercentAttackSpeedMod', $PercentAttackSpeedMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentBlockMod()
    {
        return $this->get('PercentBlockMod', 0);
    }


    /**
     * @param float $PercentBlockMod
     * @return static
     */
    public function setPercentBlockMod(float $PercentBlockMod)
    {
        return $this->set('PercentBlockMod', $PercentBlockMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentCritChanceMod()
    {
        return $this->get('PercentCritChanceMod', 0);
    }


    /**
     * @param float $PercentCritChanceMod
     * @return static
     */
    public function setPercentCritChanceMod(float $PercentCritChanceMod)
    {
        return $this->set('PercentCritChanceMod', $PercentCritChanceMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentCritDamageMod()
    {
        return $this->get('PercentCritDamageMod', 0);
    }


    /**
     * @param float $PercentCritDamageMod
     * @return static
     */
    public function setPercentCritDamageMod(float $PercentCritDamageMod)
    {
        return $this->set('PercentCritDamageMod', $PercentCritDamageMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentDodgeMod()
    {
        return $this->get('PercentDodgeMod', 0);
    }


    /**
     * @param float $PercentDodgeMod
     * @return static
     */
    public function setPercentDodgeMod(float $PercentDodgeMod)
    {
        return $this->set('PercentDodgeMod', $PercentDodgeMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentEXPBonus()
    {
        return $this->get('PercentEXPBonus', 0);
    }


    /**
     * @param float $PercentEXPBonus
     * @return static
     */
    public function setPercentEXPBonus(float $PercentEXPBonus)
    {
        return $this->set('PercentEXPBonus', $PercentEXPBonus);
    }

    /**
     *
     * @return float
     */
    public function getPercentHPPoolMod()
    {
        return $this->get('PercentHPPoolMod', 0);
    }


    /**
     * @param float $PercentHPPoolMod
     * @return static
     */
    public function setPercentHPPoolMod(float $PercentHPPoolMod)
    {
        return $this->set('PercentHPPoolMod', $PercentHPPoolMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentHPRegenMod()
    {
        return $this->get('PercentHPRegenMod', 0);
    }


    /**
     * @param float $PercentHPRegenMod
     * @return static
     */
    public function setPercentHPRegenMod(float $PercentHPRegenMod)
    {
        return $this->set('PercentHPRegenMod', $PercentHPRegenMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentLifeStealMod()
    {
        return $this->get('PercentLifeStealMod', 0);
    }


    /**
     * @param float $PercentLifeStealMod
     * @return static
     */
    public function setPercentLifeStealMod(float $PercentLifeStealMod)
    {
        return $this->set('PercentLifeStealMod', $PercentLifeStealMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentMPPoolMod()
    {
        return $this->get('PercentMPPoolMod', 0);
    }


    /**
     * @param float $PercentMPPoolMod
     * @return static
     */
    public function setPercentMPPoolMod(float $PercentMPPoolMod)
    {
        return $this->set('PercentMPPoolMod', $PercentMPPoolMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentMPRegenMod()
    {
        return $this->get('PercentMPRegenMod', 0);
    }


    /**
     * @param float $PercentMPRegenMod
     * @return static
     */
    public function setPercentMPRegenMod(float $PercentMPRegenMod)
    {
        return $this->set('PercentMPRegenMod', $PercentMPRegenMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentMagicDamageMod()
    {
        return $this->get('PercentMagicDamageMod', 0);
    }


    /**
     * @param float $PercentMagicDamageMod
     * @return static
     */
    public function setPercentMagicDamageMod(float $PercentMagicDamageMod)
    {
        return $this->set('PercentMagicDamageMod', $PercentMagicDamageMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentMovementSpeedMod()
    {
        return $this->get('PercentMovementSpeedMod', 0);
    }


    /**
     * @param float $PercentMovementSpeedMod
     * @return static
     */
    public function setPercentMovementSpeedMod(float $PercentMovementSpeedMod)
    {
        return $this->set('PercentMovementSpeedMod', $PercentMovementSpeedMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentPhysicalDamageMod()
    {
        return $this->get('PercentPhysicalDamageMod', 0);
    }


    /**
     * @param float $PercentPhysicalDamageMod
     * @return static
     */
    public function setPercentPhysicalDamageMod(float $PercentPhysicalDamageMod)
    {
        return $this->set('PercentPhysicalDamageMod', $PercentPhysicalDamageMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentSpellBlockMod()
    {
        return $this->get('PercentSpellBlockMod', 0);
    }


    /**
     * @param float $PercentSpellBlockMod
     * @return static
     */
    public function setPercentSpellBlockMod(float $PercentSpellBlockMod)
    {
        return $this->set('PercentSpellBlockMod', $PercentSpellBlockMod);
    }

    /**
     *
     * @return float
     */
    public function getPercentSpellVampMod()
    {
        return $this->get('PercentSpellVampMod', 0);
    }


    /**
     * @param float $PercentSpellVampMod
     * @return static
     */
    public function setPercentSpellVampMod(float $PercentSpellVampMod)
    {
        return $this->set('PercentSpellVampMod', $PercentSpellVampMod);
    }

    /**
     *
     * @return float
     */
    public function getRFlatArmorModPerLevel()
    {
        return $this->get('rFlatArmorModPerLevel', 0);
    }


    /**
     * @param float $rFlatArmorModPerLevel
     * @return static
     */
    public function setRFlatArmorModPerLevel(float $rFlatArmorModPerLevel)
    {
        return $this->set('rFlatArmorModPerLevel', $rFlatArmorModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatArmorPenetrationMod()
    {
        return $this->get('rFlatArmorPenetrationMod', 0);
    }


    /**
     * @param float $rFlatArmorPenetrationMod
     * @return static
     */
    public function setRFlatArmorPenetrationMod(float $rFlatArmorPenetrationMod)
    {
        return $this->set('rFlatArmorPenetrationMod', $rFlatArmorPenetrationMod);
    }

    /**
     *
     * @return float
     */
    public function getRFlatArmorPenetrationModPerLevel()
    {
        return $this->get('rFlatArmorPenetrationModPerLevel', 0);
    }


    /**
     * @param float $rFlatArmorPenetrationModPerLevel
     * @return static
     */
    public function setRFlatArmorPenetrationModPerLevel(float $rFlatArmorPenetrationModPerLevel)
    {
        return $this->set('rFlatArmorPenetrationModPerLevel', $rFlatArmorPenetrationModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatCritChanceModPerLevel()
    {
        return $this->get('rFlatCritChanceModPerLevel', 0);
    }


    /**
     * @param float $rFlatCritChanceModPerLevel
     * @return static
     */
    public function setRFlatCritChanceModPerLevel(float $rFlatCritChanceModPerLevel)
    {
        return $this->set('rFlatCritChanceModPerLevel', $rFlatCritChanceModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatCritDamageModPerLevel()
    {
        return $this->get('rFlatCritDamageModPerLevel', 0);
    }


    /**
     * @param float $rFlatCritDamageModPerLevel
     * @return static
     */
    public function setRFlatCritDamageModPerLevel(float $rFlatCritDamageModPerLevel)
    {
        return $this->set('rFlatCritDamageModPerLevel', $rFlatCritDamageModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatDodgeMod()
    {
        return $this->get('rFlatDodgeMod', 0);
    }


    /**
     * @param float $rFlatDodgeMod
     * @return static
     */
    public function setRFlatDodgeMod(float $rFlatDodgeMod)
    {
        return $this->set('rFlatDodgeMod', $rFlatDodgeMod);
    }

    /**
     *
     * @return float
     */
    public function getRFlatDodgeModPerLevel()
    {
        return $this->get('rFlatDodgeModPerLevel', 0);
    }


    /**
     * @param float $rFlatDodgeModPerLevel
     * @return static
     */
    public function setRFlatDodgeModPerLevel(float $rFlatDodgeModPerLevel)
    {
        return $this->set('rFlatDodgeModPerLevel', $rFlatDodgeModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatEnergyModPerLevel()
    {
        return $this->get('rFlatEnergyModPerLevel', 0);
    }


    /**
     * @param float $rFlatEnergyModPerLevel
     * @return static
     */
    public function setRFlatEnergyModPerLevel(float $rFlatEnergyModPerLevel)
    {
        return $this->set('rFlatEnergyModPerLevel', $rFlatEnergyModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatEnergyRegenModPerLevel()
    {
        return $this->get('rFlatEnergyRegenModPerLevel', 0);
    }


    /**
     * @param float $rFlatEnergyRegenModPerLevel
     * @return static
     */
    public function setRFlatEnergyRegenModPerLevel(float $rFlatEnergyRegenModPerLevel)
    {
        return $this->set('rFlatEnergyRegenModPerLevel', $rFlatEnergyRegenModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatGoldPer10Mod()
    {
        return $this->get('rFlatGoldPer10Mod', 0);
    }


    /**
     * @param float $rFlatGoldPer10Mod
     * @return static
     */
    public function setRFlatGoldPer10Mod(float $rFlatGoldPer10Mod)
    {
        return $this->set('rFlatGoldPer10Mod', $rFlatGoldPer10Mod);
    }

    /**
     *
     * @return float
     */
    public function getRFlatHPModPerLevel()
    {
        return $this->get('rFlatHPModPerLevel', 0);
    }


    /**
     * @param float $rFlatHPModPerLevel
     * @return static
     */
    public function setRFlatHPModPerLevel(float $rFlatHPModPerLevel)
    {
        return $this->set('rFlatHPModPerLevel', $rFlatHPModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatHPRegenModPerLevel()
    {
        return $this->get('rFlatHPRegenModPerLevel', 0);
    }


    /**
     * @param float $rFlatHPRegenModPerLevel
     * @return static
     */
    public function setRFlatHPRegenModPerLevel(float $rFlatHPRegenModPerLevel)
    {
        return $this->set('rFlatHPRegenModPerLevel', $rFlatHPRegenModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatMPModPerLevel()
    {
        return $this->get('rFlatMPModPerLevel', 0);
    }


    /**
     * @param float $rFlatMPModPerLevel
     * @return static
     */
    public function setRFlatMPModPerLevel(float $rFlatMPModPerLevel)
    {
        return $this->set('rFlatMPModPerLevel', $rFlatMPModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatMPRegenModPerLevel()
    {
        return $this->get('rFlatMPRegenModPerLevel', 0);
    }


    /**
     * @param float $rFlatMPRegenModPerLevel
     * @return static
     */
    public function setRFlatMPRegenModPerLevel(float $rFlatMPRegenModPerLevel)
    {
        return $this->set('rFlatMPRegenModPerLevel', $rFlatMPRegenModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatMagicDamageModPerLevel()
    {
        return $this->get('rFlatMagicDamageModPerLevel', 0);
    }


    /**
     * @param float $rFlatMagicDamageModPerLevel
     * @return static
     */
    public function setRFlatMagicDamageModPerLevel(float $rFlatMagicDamageModPerLevel)
    {
        return $this->set('rFlatMagicDamageModPerLevel', $rFlatMagicDamageModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatMagicPenetrationMod()
    {
        return $this->get('rFlatMagicPenetrationMod', 0);
    }


    /**
     * @param float $rFlatMagicPenetrationMod
     * @return static
     */
    public function setRFlatMagicPenetrationMod(float $rFlatMagicPenetrationMod)
    {
        return $this->set('rFlatMagicPenetrationMod', $rFlatMagicPenetrationMod);
    }

    /**
     *
     * @return float
     */
    public function getRFlatMagicPenetrationModPerLevel()
    {
        return $this->get('rFlatMagicPenetrationModPerLevel', 0);
    }


    /**
     * @param float $rFlatMagicPenetrationModPerLevel
     * @return static
     */
    public function setRFlatMagicPenetrationModPerLevel(float $rFlatMagicPenetrationModPerLevel)
    {
        return $this->set('rFlatMagicPenetrationModPerLevel', $rFlatMagicPenetrationModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatMovementSpeedModPerLevel()
    {
        return $this->get('rFlatMovementSpeedModPerLevel', 0);
    }


    /**
     * @param float $rFlatMovementSpeedModPerLevel
     * @return static
     */
    public function setRFlatMovementSpeedModPerLevel(float $rFlatMovementSpeedModPerLevel)
    {
        return $this->set('rFlatMovementSpeedModPerLevel', $rFlatMovementSpeedModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatPhysicalDamageModPerLevel()
    {
        return $this->get('rFlatPhysicalDamageModPerLevel', 0);
    }


    /**
     * @param float $rFlatPhysicalDamageModPerLevel
     * @return static
     */
    public function setRFlatPhysicalDamageModPerLevel(float $rFlatPhysicalDamageModPerLevel)
    {
        return $this->set('rFlatPhysicalDamageModPerLevel', $rFlatPhysicalDamageModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatSpellBlockModPerLevel()
    {
        return $this->get('rFlatSpellBlockModPerLevel', 0);
    }


    /**
     * @param float $rFlatSpellBlockModPerLevel
     * @return static
     */
    public function setRFlatSpellBlockModPerLevel(float $rFlatSpellBlockModPerLevel)
    {
        return $this->set('rFlatSpellBlockModPerLevel', $rFlatSpellBlockModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRFlatTimeDeadMod()
    {
        return $this->get('rFlatTimeDeadMod', 0);
    }


    /**
     * @param float $rFlatTimeDeadMod
     * @return static
     */
    public function setRFlatTimeDeadMod(float $rFlatTimeDeadMod)
    {
        return $this->set('rFlatTimeDeadMod', $rFlatTimeDeadMod);
    }

    /**
     *
     * @return float
     */
    public function getRFlatTimeDeadModPerLevel()
    {
        return $this->get('rFlatTimeDeadModPerLevel', 0);
    }


    /**
     * @param float $rFlatTimeDeadModPerLevel
     * @return static
     */
    public function setRFlatTimeDeadModPerLevel(float $rFlatTimeDeadModPerLevel)
    {
        return $this->set('rFlatTimeDeadModPerLevel', $rFlatTimeDeadModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRPercentArmorPenetrationMod()
    {
        return $this->get('rPercentArmorPenetrationMod', 0);
    }


    /**
     * @param float $rPercentArmorPenetrationMod
     * @return static
     */
    public function setRPercentArmorPenetrationMod(float $rPercentArmorPenetrationMod)
    {
        return $this->set('rPercentArmorPenetrationMod', $rPercentArmorPenetrationMod);
    }

    /**
     *
     * @return float
     */
    public function getRPercentArmorPenetrationModPerLevel()
    {
        return $this->get('rPercentArmorPenetrationModPerLevel', 0);
    }


    /**
     * @param float $rPercentArmorPenetrationModPerLevel
     * @return static
     */
    public function setRPercentArmorPenetrationModPerLevel(float $rPercentArmorPenetrationModPerLevel)
    {
        return $this->set('rPercentArmorPenetrationModPerLevel', $rPercentArmorPenetrationModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRPercentAttackSpeedModPerLevel()
    {
        return $this->get('rPercentAttackSpeedModPerLevel', 0);
    }


    /**
     * @param float $rPercentAttackSpeedModPerLevel
     * @return static
     */
    public function setRPercentAttackSpeedModPerLevel(float $rPercentAttackSpeedModPerLevel)
    {
        return $this->set('rPercentAttackSpeedModPerLevel', $rPercentAttackSpeedModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRPercentCooldownMod()
    {
        return $this->get('rPercentCooldownMod', 0);
    }


    /**
     * @param float $rPercentCooldownMod
     * @return static
     */
    public function setRPercentCooldownMod(float $rPercentCooldownMod)
    {
        return $this->set('rPercentCooldownMod', $rPercentCooldownMod);
    }

    /**
     *
     * @return float
     */
    public function getRPercentCooldownModPerLevel()
    {
        return $this->get('rPercentCooldownModPerLevel', 0);
    }


    /**
     * @param float $rPercentCooldownModPerLevel
     * @return static
     */
    public function setRPercentCooldownModPerLevel(float $rPercentCooldownModPerLevel)
    {
        return $this->set('rPercentCooldownModPerLevel', $rPercentCooldownModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRPercentMagicPenetrationMod()
    {
        return $this->get('rPercentMagicPenetrationMod', 0);
    }


    /**
     * @param float $rPercentMagicPenetrationMod
     * @return static
     */
    public function setRPercentMagicPenetrationMod(float $rPercentMagicPenetrationMod)
    {
        return $this->set('rPercentMagicPenetrationMod', $rPercentMagicPenetrationMod);
    }

    /**
     *
     * @return float
     */
    public function getRPercentMagicPenetrationModPerLevel()
    {
        return $this->get('rPercentMagicPenetrationModPerLevel', 0);
    }


    /**
     * @param float $rPercentMagicPenetrationModPerLevel
     * @return static
     */
    public function setRPercentMagicPenetrationModPerLevel(float $rPercentMagicPenetrationModPerLevel)
    {
        return $this->set('rPercentMagicPenetrationModPerLevel', $rPercentMagicPenetrationModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRPercentMovementSpeedModPerLevel()
    {
        return $this->get('rPercentMovementSpeedModPerLevel', 0);
    }


    /**
     * @param float $rPercentMovementSpeedModPerLevel
     * @return static
     */
    public function setRPercentMovementSpeedModPerLevel(float $rPercentMovementSpeedModPerLevel)
    {
        return $this->set('rPercentMovementSpeedModPerLevel', $rPercentMovementSpeedModPerLevel);
    }

    /**
     *
     * @return float
     */
    public function getRPercentTimeDeadMod()
    {
        return $this->get('rPercentTimeDeadMod', 0);
    }


    /**
     * @param float $rPercentTimeDeadMod
     * @return static
     */
    public function setRPercentTimeDeadMod(float $rPercentTimeDeadMod)
    {
        return $this->set('rPercentTimeDeadMod', $rPercentTimeDeadMod);
    }

    /**
     *
     * @return float
     */
    public function getRPercentTimeDeadModPerLevel()
    {
        return $this->get('rPercentTimeDeadModPerLevel', 0);
    }


    /**
     * @param float $rPercentTimeDeadModPerLevel
     * @return static
     */
    public function setRPercentTimeDeadModPerLevel(float $rPercentTimeDeadModPerLevel)
    {
        return $this->set('rPercentTimeDeadModPerLevel', $rPercentTimeDeadModPerLevel);
    }



}