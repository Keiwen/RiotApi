<?php

namespace Keiwen\RiotApi\Constants;


class Region extends Constants
{

    const BR = "br";
    const EUNE = "eune";
    const EUW = "euw";
    const KR = "kr";
    const LAN = "lan";
    const LAS = "las";
    const NA = "na";
    const OCE = "oce";
    const TR = "tr";
    const RU = "ru";

    const PBE = "pbe";

    const DEFAULT = self::NA;


    /** @var array */
    protected static $platforms = array(
        self::BR => 'BR1',
        self::EUNE => 'EUN1',
        self::EUW => 'EUW1',
        self::KR => 'KR',
        self::LAN => 'LA2',
        self::LAS => 'LA1',
        self::NA => 'NA1',
        self::OCE => 'OC1',
        self::TR => 'TR1',
        self::RU => 'RU',

        self::PBE => 'PBE1',
    );



    public static function getValidValues(bool $liveOnly = true)
    {
        if(empty(static::$__validValues)) {
            $rClass = new \ReflectionClass(static::class);
            $constants = $rClass->getConstants();
            if($liveOnly) {
                unset($constants['PBE']);
            }
            static::$__validValues = array_values($constants);
        }
        return static::$__validValues;

    }

    /**
     * @param string $region
     * @return string
     */
    public static function getPlatform(string $region)
    {
        return isset(self::$platforms[$region]) ? self::$platforms[$region] : '';
    }

    /**
     * @param string $region
     * @return string
     */
    public static function validateRegion(string $region)
    {
        return in_array($region, self::getValidValues()) ? $region : self::DEFAULT;
    }


}