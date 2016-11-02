<?php

namespace Keiwen\RiotApi\Constants;


class GameMode extends Constants
{

    const CLASSIC = 'CLASSIC';
    /** Dominion games */
    const ODIN = 'ODIN';
    const ARAM = 'ARAM';
    const TUTORIAL = 'TUTORIAL';
    const ONEFORALL = 'ONEFORALL';
    const ASCENSION = 'ASCENSION';
    const FIRSTBLOOD = 'FIRSTBLOOD';
    const KINGPORO = 'KINGPORO';
    const SIEGE = 'SIEGE';


    private static $modeNames = array(
        self::CLASSIC => 'Classic Summoner\'s Rift and Twisted Treeline games',
        self::ODIN => 'Dominion/Crystal Scar games',
        self::ARAM => 'ARAM games',
        self::TUTORIAL => 'Tutorial games',
        self::ONEFORALL => 'One for All games',
        self::ASCENSION => 'Ascension games',
        self::FIRSTBLOOD => 'Snowdown Showdown games',
        self::KINGPORO => 'King Poro games',
        self::SIEGE => 'Nexus Siege games',

    );



    /**
     * @param string $mode
     * @return string
     */
    public static function getModeName(string $mode)
    {
        return isset(self::$modeNames[$mode]) ? self::$modeNames[$mode] : $mode;
    }



}