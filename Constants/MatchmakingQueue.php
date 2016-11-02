<?php

namespace Keiwen\RiotApi\Constants;


class MatchmakingQueue extends Constants
{


    const CUSTOM = 'CUSTOM';
    const NORMAL_3x3 = 'NORMAL_3x3';
    const NORMAL_5x5_BLIND = 'NORMAL_5x5_BLIND';
    const NORMAL_5x5_DRAFT = 'NORMAL_5x5_DRAFT';
    const RANKED_SOLO_5x5 = 'RANKED_SOLO_5x5';
    /** @deprecated */
    const RANKED_PREMADE_5x5 = 'RANKED_PREMADE_5x5';
    /** @deprecated */
    const RANKED_PREMADE_3x3 = 'RANKED_PREMADE_3x3';
    const RANKED_TEAM_3x3 = 'RANKED_TEAM_3x3';
    const RANKED_TEAM_5x5 = 'RANKED_TEAM_5x5';
    const ODIN_5x5_BLIND = 'ODIN_5x5_BLIND';
    const ODIN_5x5_DRAFT = 'ODIN_5x5_DRAFT';
    /** @deprecated */
    const BOT_5x5 = 'BOT_5x5';
    const BOT_ODIN_5x5 = 'BOT_ODIN_5x5';
    const BOT_5x5_INTRO = 'BOT_5x5_INTRO';
    const BOT_5x5_BEGINNER = 'BOT_5x5_BEGINNER';
    const BOT_5x5_INTERMEDIATE = 'BOT_5x5_INTERMEDIATE';
    const BOT_TT_3x3 = 'BOT_TT_3x3';
    const GROUP_FINDER_5x5 = 'GROUP_FINDER_5x5';
    const ARAM_5x5 = 'ARAM_5x5';
    const ONEFORALL_5x5 = 'ONEFORALL_5x5';
    const FIRSTBLOOD_1x1 = 'FIRSTBLOOD_1x1';
    const FIRSTBLOOD_2x2 = 'FIRSTBLOOD_2x2';
    const SR_6x6 = 'SR_6x6';
    const URF_5x5 = 'URF_5x5';
    const ONEFORALL_MIRRORMODE_5x5 = 'ONEFORALL_MIRRORMODE_5x5';
    const BOT_URF_5x5 = 'BOT_URF_5x5';
    const NIGHTMARE_BOT_5x5_RANK1 = 'NIGHTMARE_BOT_5x5_RANK1';
    const NIGHTMARE_BOT_5x5_RANK2 = 'NIGHTMARE_BOT_5x5_RANK2';
    const NIGHTMARE_BOT_5x5_RANK5 = 'NIGHTMARE_BOT_5x5_RANK5';
    const ASCENSION_5x5 = 'ASCENSION_5x5';
    const HEXAKILL = 'HEXAKILL';
    const BILGEWATER_ARAM_5x5 = 'BILGEWATER_ARAM_5x5';
    const KING_PORO_5x5 = 'KING_PORO_5x5';
    const COUNTER_PICK = 'COUNTER_PICK';
    const BILGEWATER_5x5 = 'BILGEWATER_5x5';
    const SIEGE = 'SIEGE';
    const DEFINITELY_NOT_DOMINION_5x5 = 'DEFINITELY_NOT_DOMINION_5x5';
    const ARURF_5X5 = 'ARURF_5X5';
    const TEAM_BUILDER_DRAFT_UNRANKED_5x5 = 'TEAM_BUILDER_DRAFT_UNRANKED_5x5';
    const TEAM_BUILDER_DRAFT_RANKED_5x5 = 'TEAM_BUILDER_DRAFT_RANKED_5x5';


    private static $queueIds = array(
        self::CUSTOM => 0,
        self::NORMAL_3x3 => 8,
        self::NORMAL_5x5_BLIND => 2,
        self::NORMAL_5x5_DRAFT => 14,
        self::RANKED_SOLO_5x5 => 4,
        self::RANKED_PREMADE_5x5 => 6,
        self::RANKED_PREMADE_3x3 => 9,
        self::RANKED_TEAM_3x3 => 41,
        self::RANKED_TEAM_5x5 => 42,
        self::ODIN_5x5_BLIND => 16,
        self::ODIN_5x5_DRAFT => 17,
        self::BOT_5x5 => 7,
        self::BOT_ODIN_5x5 => 25,
        self::BOT_5x5_INTRO => 31,
        self::BOT_5x5_BEGINNER => 32,
        self::BOT_5x5_INTERMEDIATE => 33,
        self::BOT_TT_3x3 => 52,
        self::GROUP_FINDER_5x5 => 61,
        self::ARAM_5x5 => 65,
        self::ONEFORALL_5x5 => 70,
        self::FIRSTBLOOD_1x1 => 72,
        self::FIRSTBLOOD_2x2 => 73,
        self::SR_6x6 => 75,
        self::URF_5x5 => 76,
        self::ONEFORALL_MIRRORMODE_5x5 => 78,
        self::BOT_URF_5x5 => 83,
        self::NIGHTMARE_BOT_5x5_RANK1 => 91,
        self::NIGHTMARE_BOT_5x5_RANK2 => 92,
        self::NIGHTMARE_BOT_5x5_RANK5 => 93,
        self::ASCENSION_5x5 => 96,
        self::HEXAKILL => 98,
        self::BILGEWATER_ARAM_5x5 => 100,
        self::KING_PORO_5x5 => 300,
        self::COUNTER_PICK => 310,
        self::BILGEWATER_5x5 => 313,
        self::SIEGE => 315,
        self::DEFINITELY_NOT_DOMINION_5x5 => 317,
        self::ARURF_5X5 => 318,
        self::TEAM_BUILDER_DRAFT_UNRANKED_5x5 => 400,
        self::TEAM_BUILDER_DRAFT_RANKED_5x5 => 410,
    );

    private static $queueNames = array(
        self::CUSTOM => 'Custom',
        self::NORMAL_3x3 => 'Normal 3v3',
        self::NORMAL_5x5_BLIND => 'Normal 5v5 Blind Pick',
        self::NORMAL_5x5_DRAFT => 'Normal 5v5 Draft Pick',
        self::RANKED_SOLO_5x5 => 'Ranked Solo 5v5',
        self::RANKED_PREMADE_5x5 => 'Ranked Premade 5v5',
        self::RANKED_PREMADE_3x3 => 'Ranked Premade 3v3',
        self::RANKED_TEAM_3x3 => 'Ranked Team 3v3',
        self::RANKED_TEAM_5x5 => 'Ranked Team 5v5',
        self::ODIN_5x5_BLIND => 'Dominion 5v5 Blind Pick',
        self::ODIN_5x5_DRAFT => 'Dominion 5v5 Draft Pick',
        self::BOT_5x5 => 'Historical Summoner\'s Rift Coop vs AI',
        self::BOT_ODIN_5x5 => 'Dominion Coop vs AI',
        self::BOT_5x5_INTRO => 'Summoner\'s Rift Coop vs AI Intro Bot',
        self::BOT_5x5_BEGINNER => 'Summoner\'s Rift Coop vs AI Beginner Bot',
        self::BOT_5x5_INTERMEDIATE => 'Historical Summoner\'s Rift Coop vs AI Intermediate Bot',
        self::BOT_TT_3x3 => 'Twisted Treeline Coop vs AI',
        self::GROUP_FINDER_5x5 => 'Team Builder',
        self::ARAM_5x5 => 'ARAM',
        self::ONEFORALL_5x5 => 'One for All',
        self::FIRSTBLOOD_1x1 => 'Snowdown Showdown 1v1',
        self::FIRSTBLOOD_2x2 => 'Snowdown Showdown 2v2',
        self::SR_6x6 => 'Summoner\'s Rift 6x6 Hexakill',
        self::URF_5x5 => 'Ultra Rapid Fire',
        self::ONEFORALL_MIRRORMODE_5x5 => 'One for All (Mirror mode)',
        self::BOT_URF_5x5 => 'Ultra Rapid Fire played against AI',
        self::NIGHTMARE_BOT_5x5_RANK1 => 'Doom Bots Rank 1',
        self::NIGHTMARE_BOT_5x5_RANK2 => 'Doom Bots Rank 2',
        self::NIGHTMARE_BOT_5x5_RANK5 => 'Doom Bots Rank 5',
        self::ASCENSION_5x5 => 'Ascension',
        self::HEXAKILL => 'Twisted Treeline 6x6 Hexakill',
        self::BILGEWATER_ARAM_5x5 => 'Butcher\'s Bridge',
        self::KING_PORO_5x5 => 'King Poro',
        self::COUNTER_PICK => 'Nemesis',
        self::BILGEWATER_5x5 => 'Black Market Brawlers',
        self::SIEGE => 'Nexus Siege games',
        self::DEFINITELY_NOT_DOMINION_5x5 => 'Definitely Not Dominion',
        self::ARURF_5X5 => 'All Random URF games',
        self::TEAM_BUILDER_DRAFT_UNRANKED_5x5 => 'Normal 5v5 Draft Pick',
        self::TEAM_BUILDER_DRAFT_RANKED_5x5 => 'Ranked 5v5 Draft Pick',
    );



    /**
     * @return array
     */
    public static function getRankedQueues()
    {
        return array(
            self::RANKED_TEAM_3x3,
            self::RANKED_SOLO_5x5,
            self::RANKED_TEAM_5x5,
        );
    }


    /**
     * @param string $queue
     * @return int
     */
    public static function getQueueId(string $queue)
    {
        return isset(self::$queueIds[$queue]) ? self::$queueIds[$queue] : 0;
    }

    /**
     * @param string $queue
     * @return string
     */
    public static function getQueueName(string $queue)
    {
        return isset(self::$queueNames[$queue]) ? self::$queueNames[$queue] : $queue;
    }


}