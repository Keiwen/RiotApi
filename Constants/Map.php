<?php

namespace Keiwen\RiotApi\Constants;


class Map extends Constants
{


    const SUMMONERS_RIFT_SUMMER = 'SUMMONERS_RIFT_SUMMER';
    const SUMMONERS_RIFT_AUTUMN = 'SUMMONERS_RIFT_AUTUMN';
    const PROVING_GROUNDS = 'PROVING_GROUNDS';
    const TWISTED_TREELINE_ORIGINAL = 'TWISTED_TREELINE_ORIGINAL';
    const CRYSTAL_SCAR = 'CRYSTAL_SCAR';
    const TWISTED_TREELINE = 'TWISTED_TREELINE';
    const SUMMONERS_RIFT = 'SUMMONERS_RIFT';
    const HOWLING_ABYSS = 'HOWLING_ABYSS';
    const BUTCHERS_BRIDGE = 'BUTCHERS_BRIDGE';



    private static $mapIds = array(
        self::SUMMONERS_RIFT_SUMMER => 1,
        self::SUMMONERS_RIFT_AUTUMN => 2,
        self::PROVING_GROUNDS => 3,
        self::TWISTED_TREELINE_ORIGINAL => 4,
        self::CRYSTAL_SCAR => 8,
        self::TWISTED_TREELINE => 10,
        self::SUMMONERS_RIFT => 11,
        self::HOWLING_ABYSS => 12,
        self::BUTCHERS_BRIDGE => 14,

    );

    private static $mapNames = array(
        self::SUMMONERS_RIFT_SUMMER => 'Summoner\'s Rift (original summer variant)',
        self::SUMMONERS_RIFT_AUTUMN => 'Summoner\'s Rift (original autumn variant)',
        self::PROVING_GROUNDS => 'The Proving Grounds',
        self::TWISTED_TREELINE_ORIGINAL => 'Twisted Treeline (original version)',
        self::CRYSTAL_SCAR => 'The Crystal Scar',
        self::TWISTED_TREELINE => 'Twisted Treeline',
        self::SUMMONERS_RIFT => 'Summoner\'s Rift',
        self::HOWLING_ABYSS => 'Howling Abyss',
        self::BUTCHERS_BRIDGE => 'Butcher\'s Bridge',
    );

    private static $mapMinX = array(
        self::SUMMONERS_RIFT_SUMMER => -269,
        self::SUMMONERS_RIFT_AUTUMN => -269,
        self::PROVING_GROUNDS => -500,
        self::TWISTED_TREELINE_ORIGINAL => 0,
        self::CRYSTAL_SCAR => 0,
        self::TWISTED_TREELINE => 0,
        self::SUMMONERS_RIFT => 0,
        self::HOWLING_ABYSS => -28,
        self::BUTCHERS_BRIDGE => -28,
    );

    private static $mapMinY = array(
        self::SUMMONERS_RIFT_SUMMER => -83,
        self::SUMMONERS_RIFT_AUTUMN => -83,
        self::PROVING_GROUNDS => -500,
        self::TWISTED_TREELINE_ORIGINAL => 0,
        self::CRYSTAL_SCAR => 0,
        self::TWISTED_TREELINE => 0,
        self::SUMMONERS_RIFT => 0,
        self::HOWLING_ABYSS => -19,
        self::BUTCHERS_BRIDGE => -19,
    );

    private static $mapMaxX = array(
        self::SUMMONERS_RIFT_SUMMER => 14276,
        self::SUMMONERS_RIFT_AUTUMN => 14276,
        self::PROVING_GROUNDS => 15000,
        self::TWISTED_TREELINE_ORIGINAL => 15398,
        self::CRYSTAL_SCAR => 13987,
        self::TWISTED_TREELINE => 15398,
        self::SUMMONERS_RIFT => 14820,
        self::HOWLING_ABYSS => 12849,
        self::BUTCHERS_BRIDGE => 12849,
    );

    private static $mapMaxY = array(
        self::SUMMONERS_RIFT_SUMMER => 14522,
        self::SUMMONERS_RIFT_AUTUMN => 14522,
        self::PROVING_GROUNDS => 15000,
        self::TWISTED_TREELINE_ORIGINAL => 15398,
        self::CRYSTAL_SCAR => 13987,
        self::TWISTED_TREELINE => 15398,
        self::SUMMONERS_RIFT => 14881,
        self::HOWLING_ABYSS => 12858,
        self::BUTCHERS_BRIDGE => 12858,
    );



    /**
     * @param string $map
     * @return int
     */
    public static function getMapId(string $map)
    {
        return isset(self::$mapIds[$map]) ? self::$mapIds[$map] : 0;
    }

    /**
     * @param string $map
     * @return string
     */
    public static function getMapName(string $map)
    {
        return isset(self::$mapNames[$map]) ? self::$mapNames[$map] : $map;
    }


    /**
     * @param string $map
     * @return string
     */
    public static function getMapMinX(string $map)
    {
        return isset(self::$mapMinX[$map]) ? self::$mapMinX[$map] : 0;
    }

    /**
     * @param string $map
     * @return string
     */
    public static function getMapMinY(string $map)
    {
        return isset(self::$mapMinY[$map]) ? self::$mapMinY[$map] : 0;
    }

    /**
     * @param string $map
     * @return string
     */
    public static function getMapMaxX(string $map)
    {
        return isset(self::$mapMaxX[$map]) ? self::$mapMaxX[$map] : 0;
    }

    /**
     * @param string $map
     * @return string
     */
    public static function getMapMaxY(string $map)
    {
        return isset(self::$mapMaxY[$map]) ? self::$mapMaxY[$map] : 0;
    }



}