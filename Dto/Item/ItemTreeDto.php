<?php

namespace Keiwen\RiotApi\Dto\Item;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains item tree data.
 */
class ItemTreeDto extends DtoParent
{


    /**
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->get('header', '');
    }


    /**
     * @param string $header
     * @return static
     */
    public function setHeader(string $header)
    {
        return $this->set('header', $header);
    }

    /**
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->get('tags', array());
    }


    /**
     * @param string[] $tags
     * @return static
     */
    public function setTags(array $tags)
    {
        return $this->set('tags', $tags);
    }


}