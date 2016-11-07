<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\Match\FeaturedGameListDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class FeaturedGames extends AbstractService
{

    protected static $urlPattern = '/observer-mode/rest/featured';

    protected static function getServiceName() : string
    {
        return ServiceRegistry::FEATURED_GAMES;
    }


    /**
     * Get list of featured games
     * @param string $region
     * @return array|FeaturedGameListDto|\stdClass|string
     */
    public function getFeatured($region = '')
    {
        return $this->query("", FeaturedGameListDto::class, $region);
    }



}
