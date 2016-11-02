<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Mastery\MasteryPageListDto;
use Keiwen\RiotApi\Dto\Rune\RunePageListDto;
use Keiwen\RiotApi\Dto\Summoner\SummonerDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class Summoner extends AbstractService
{

    protected static function getServiceName() : string
    {
        return ServiceRegistry::SUMMONER;
    }


    /**
     * Get summoner objects mapped by standardized summoner name for a given list of summoner names
     * @param array  $names
     * @param string $region
     * @return array|SummonerDto[]|\stdClass|string
     */
    public function getByName(array $names, $region = '')
    {
        $names = implode(',', $names);
        //!! map of object returned
        $result = $this->query("by-name/$names", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, SummonerDto::class);

    }

    /**
     * Get summoner objects mapped by summoner ID for a given list of summoner IDs
     * @param array  $ids
     * @param string $region
     * @return array|SummonerDto[]|\stdClass|string
     */
    public function get(array $ids, $region = '')
    {
        $ids = implode(',', $ids);
        //!! map of object returned
        $result = $this->query("$ids", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, SummonerDto::class);
    }

    /**
     * Get mastery pages mapped by summoner ID for a given list of summoner IDs
     * @param array  $ids
     * @param string $region
     * @return array|MasteryPageListDto[]|\stdClass|string
     */
    public function getMasteries(array $ids, $region = '')
    {
        $ids = implode(',', $ids);
        //!! map of object returned
        $result = $this->query("$ids/masteries", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, MasteryPageListDto::class);
    }

    /**
     * Get summoner names mapped by summoner ID for a given list of summoner IDs
     * @param array  $ids
     * @param string $region
     * @return array|DtoParent|\stdClass|string
     */
    public function getName(array $ids, $region = '')
    {
        $ids = implode(',', $ids);
        return $this->query("$ids/name", DtoParent::class, $region);
    }

    /**
     * Get rune pages mapped by summoner ID for a given list of summoner IDs
     * @param array  $ids
     * @param string $region
     * @return array|RunePageListDto[]|\stdClass|string
     */
    public function getRunes(array $ids, $region = '')
    {
        $ids = implode(',', $ids);
        //!! map of object returned
        $result = $this->query("$ids/runes", DtoParent::class, $region);
        return $this->regenerateDtoMap($result, RunePageListDto::class);
    }




}
