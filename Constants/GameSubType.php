<?php

namespace Keiwen\RiotApi\Constants;


class GameSubType extends Constants
{


    const NONE = 'NONE';
    const NORMAL = 'NORMAL';
    const NORMAL_3x3 = 'NORMAL_3x3';
    const ODIN_UNRANKED = 'ODIN_UNRANKED';
    const ARAM_UNRANKED_5x5 = 'ARAM_UNRANKED_5x5';
    const BOT = 'BOT';
    const BOT_3x3 = 'BOT_3x3';
    const RANKED_SOLO_5x5 = 'RANKED_SOLO_5x5';
    const RANKED_TEAM_3x3 = 'RANKED_TEAM_3x3';
    const RANKED_TEAM_5x5 = 'RANKED_TEAM_5x5';
    const CAP_5x5 = 'CAP_5x5';
    const ONEFORALL_5x5 = 'ONEFORALL_5x5';
    const FIRSTBLOOD_1x1 = 'FIRSTBLOOD_1x1';
    const FIRSTBLOOD_2x2 = 'FIRSTBLOOD_2x2';
    const SR_6x6 = 'SR_6x6';
    const URF = 'URF';
    const URF_BOT = 'URF_BOT';
    const NIGHTMARE_BOT = 'NIGHTMARE_BOT';
    const ASCENSION = 'ASCENSION';
    const HEXAKILL = 'HEXAKILL';
    const KING_PORO = 'KING_PORO';
    const COUNTER_PICK = 'COUNTER_PICK';
    const BILGEWATER = 'BILGEWATER';
    const SIEGE = 'SIEGE';


    private static $subTypeNames = array(
        self::NONE => 'Custom games',
        self::NORMAL => 'Summoner\'s Rift unranked games',
        self::NORMAL_3x3 => 'Twisted Treeline unranked games',
        self::ODIN_UNRANKED => 'Dominion/Crystal Scar games',
        self::ARAM_UNRANKED_5x5 => 'ARAM/Howling Abyss games',
        self::BOT => 'Summoner\'s Rift and Crystal Scar games played against Intro, Beginner, or Intermediate AI',
        self::BOT_3x3 => 'Twisted Treeline games played against AI',
        self::RANKED_SOLO_5x5 => 'Summoner\'s Rift ranked solo queue games',
        self::RANKED_TEAM_3x3 => 'Twisted Treeline ranked team games',
        self::RANKED_TEAM_5x5=> 'Summoner\'s Rift ranked team games',
        self::CAP_5x5 => 'Team Builder games',
        self::ONEFORALL_5x5 => 'One for All games',
        self::FIRSTBLOOD_1x1 => 'Snowdown Showdown 1x1 games',
        self::FIRSTBLOOD_2x2 => 'Snowdown Showdown 2x2 games',
        self::SR_6x6 => 'Summoner\'s Rift 6x6 Hexakill games',
        self::URF => 'Ultra Rapid Fire games',
        self::URF_BOT => 'Ultra Rapid Fire games played against AI',
        self::NIGHTMARE_BOT => 'Summoner\'s Rift games played against Nightmare AI',
        self::ASCENSION => 'Ascension games',
        self::HEXAKILL => 'Twisted Treeline 6x6 Hexakill games',
        self::KING_PORO => 'King Poro games',
        self::COUNTER_PICK => 'Nemesis games',
        self::BILGEWATER => 'Black Market Brawlers games',
        self::SIEGE => 'Nexus Siege games',
    );


    /**
     * @param string $subType
     * @return string
     */
    public static function getSubTypeName(string $subType)
    {
        return isset(self::$subTypeNames[$subType]) ? self::$subTypeNames[$subType] : $subType;
    }



}