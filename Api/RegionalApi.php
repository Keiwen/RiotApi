<?php

namespace Keiwen\RiotApi\Api;


use Keiwen\RiotApi\Services\Regional;
use Keiwen\RiotApi\Services\ServiceRegistry;

class RegionalApi extends RiotApi
{

    protected static $apiName = self::API_REGIONAL;
    protected static $baseUrlPattern = "https://%s.api.pvp.net";


    /**
     * @param string $server
     */
    public function setServer(string $server)
    {
        parent::setServer($server);
        $this->baseUrl = sprintf(self::$baseUrlPattern, $this->server);
    }

    /**
     * @return Regional\Champion
     */
    public function getServiceChampion()
    {
        return $this->loadService(ServiceRegistry::CHAMPION);
    }

    /**
     * @return Regional\Championmastery
     */
    public function getServiceChampionmastery()
    {
        return $this->loadService(ServiceRegistry::CHAMPION_MASTERY);
    }

    /**
     * @return Regional\CurrentGame
     */
    public function getServiceCurrentGame()
    {
        return $this->loadService(ServiceRegistry::CURRENT_GAME);
    }

    /**
     * @return Regional\FeaturedGames
     */
    public function getServiceFeaturedGames()
    {
        return $this->loadService(ServiceRegistry::FEATURED_GAMES);
    }

    /**
     * @return Regional\Game
     */
    public function getServiceGame()
    {
        return $this->loadService(ServiceRegistry::GAME);
    }

    /**
     * @return Regional\League
     */
    public function getServiceLeague()
    {
        return $this->loadService(ServiceRegistry::LEAGUE);
    }

    /**
     * @return Regional\Match
     */
    public function getServiceMatch()
    {
        return $this->loadService(ServiceRegistry::MATCH);
    }

    /**
     * @return Regional\Matchlist
     */
    public function getServiceMatchList()
    {
        return $this->loadService(ServiceRegistry::MATCHLIST);
    }

    /**
     * @return Regional\Stats
     */
    public function getServiceStats()
    {
        return $this->loadService(ServiceRegistry::STATS);
    }

    /**
     * @return Regional\Summoner
     */
    public function getServiceSummoner()
    {
        return $this->loadService(ServiceRegistry::SUMMONER);
    }

    /**
     * @return Regional\Team
     */
    public function getServiceTeam()
    {
        return $this->loadService(ServiceRegistry::TEAM);
    }


}
