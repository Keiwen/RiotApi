<?php

namespace Keiwen\RiotApi\Services\Status;

use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Shard\ShardDto;
use Keiwen\RiotApi\Dto\Shard\ShardStatusDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;

class Status extends AbstractService
{

    protected $urlPattern = '';

    protected static function getServiceName() : string
    {
        return ServiceRegistry::LOL_STATUS;
    }


    /**
     * Get shard list
     * @return array|ShardDto[]|\stdClass|string
     */
    public function getShards()
    {
        //!! list of object returned
        $result = $this->query('shards', DtoParent::class);
        return $this->regenerateDtoMap($result, ShardDto::class);
    }

    /**
     * Get shard status.
     * Returns the data available on the status.leagueoflegends.com website for the given region
     * @param string $code
     * @return array|ShardStatusDto|\stdClass|string
     */
    public function getShardStatus(string $code)
    {
        return $this->query("shards/$code", ShardStatusDto::class);
    }




}
