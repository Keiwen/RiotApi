<?php

namespace Keiwen\RiotApi\Services\Regional;

use Keiwen\RiotApi\Dto\Match\MatchDetailDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;


class Match extends AbstractService
{

    protected static function getServiceName() : string
    {
        return ServiceRegistry::MATCH;
    }


    /**
     * Retrieve match by match ID
     * @param int    $id
     * @param bool   $includeTimeline
     * @param string $region
     * @return array|MatchDetailDto|\stdClass|string
     */
    public function getMatch(int $id, bool $includeTimeline = false, $region = '')
    {
        $queryParam = array();
        if($includeTimeline) $queryParam['includeTimeline'] = 'true';
        return $this->query("$id", MatchDetailDto::class, $region, $queryParam);
    }



}
