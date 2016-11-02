<?php

namespace Keiwen\RiotApi\Dto\Shard;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 */
class ShardDto extends DtoParent
{


    /**
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->get('hostname', '');
    }


    /**
     * @param string $hostname
     * @return static
     */
    public function setHostname(string $hostname)
    {
        return $this->set('hostname', $hostname);
    }

    /**
     *
     * @return string[]
     */
    public function getLocales()
    {
        return $this->get('locales', array());
    }


    /**
     * @param string[] $locales
     * @return static
     */
    public function setLocales(array $locales)
    {
        return $this->set('locales', $locales);
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
    public function getRegionTag()
    {
        return $this->get('region_tag', '');
    }


    /**
     * @param string $regionTag
     * @return static
     */
    public function setRegionTag(string $regionTag)
    {
        return $this->set('region_tag', $regionTag);
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


}