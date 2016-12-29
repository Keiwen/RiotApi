<?php

namespace Keiwen\RiotApi\Dto\Shard;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 */
class ServiceDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['incidents'] = IncidentDto::class;
        return $included;
    }

    /**
     *
     * @return IncidentDto[]
     */
    public function getIncidents()
    {
        return $this->get('incidents', array());
    }


    /**
     * @param IncidentDto[] $incidents
     * @return static
     */
    public function setIncidents($incidents)
    {
        if(empty($incidents)) $incidents = array();
        return $this->set('incidents', $incidents);
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->get('name', '');
    }


    /**
     * @param string $name
     * @return static
     */
    public function setName(string $name)
    {
        return $this->set('name', $name);
    }

    /**
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->get('slug', '');
    }


    /**
     * @param string $slug
     * @return static
     */
    public function setSlug(string $slug)
    {
        return $this->set('slug', $slug);
    }

    /**
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->get('status', '');
    }


    /**
     * @param string $status
     * @return static
     */
    public function setStatus(string $status)
    {
        return $this->set('status', $status);
    }


}