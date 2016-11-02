<?php

namespace Keiwen\RiotApi\Dto\Shard;


/**
 */
class ShardStatusDto extends ShardDto
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['services'] = ServiceDto::class;
        return $included;
    }


    /**
     *
     * @return ServiceDto[]
     */
    public function getServices()
    {
        return $this->get('services', array());
    }


    /**
     * @param ServiceDto[] $services
     * @return static
     */
    public function setServices(array $services)
    {
        return $this->set('services', $services);
    }


}