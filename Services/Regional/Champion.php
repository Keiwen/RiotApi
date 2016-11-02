<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\Champion\ChampionInfoDto;
use Keiwen\RiotApi\Dto\Champion\ChampionInfoListDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class Champion extends AbstractService
{


    protected static function getServiceName() : string
    {
        return ServiceRegistry::CHAMPION;
    }


    /**
     * Retrieve all champions.
     * @param bool   $freeToPlay
     * @param string $region
     * @return array|ChampionInfoListDto|\stdClass|string
     */
    public function getChampions(bool $freeToPlay = false, $region = '')
    {
        $queryParam = $freeToPlay ? array('freeToPlay' => 'true') : array();
        return $this->query('', ChampionInfoListDto::class, $region, $queryParam);
    }

    /**
     * Retrieve champion by ID
     * @param int    $id
     * @param string $region
     * @return array|ChampionInfoDto|\stdClass|string
     */
    public function getChampion(int $id, $region = '')
    {
        return $this->query($id, ChampionInfoDto::class, $region);
    }



}
