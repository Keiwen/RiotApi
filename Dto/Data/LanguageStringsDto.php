<?php

namespace Keiwen\RiotApi\Dto\Data;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains language strings data.
 */
class LanguageStringsDto extends DtoParent
{


    /**
     * Map[string,string]
     * @return string[]
     */
    public function getData()
    {
        return $this->get('data', array());
    }


    /**
     * @param string[] $data
     * @return static
     */
    public function setData(array $data)
    {
        return $this->set('data', $data);
    }

    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->get('type', '');
    }


    /**
     * @param string $type
     * @return static
     */
    public function setType(string $type)
    {
        return $this->set('type', $type);
    }

    /**
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->get('version', '');
    }


    /**
     * @param string $version
     * @return static
     */
    public function setVersion(string $version)
    {
        return $this->set('version', $version);
    }



}