<?php

namespace Keiwen\RiotApi\Dto\Data;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains meta data.
 */
class MetaDataDto extends DtoParent
{

    /**
     *
     * @return bool
     */
    public function getIsRune()
    {
        return $this->get('isRune', false);
    }


    /**
     * @param bool $isRune
     * @return static
     */
    public function setIsRune(bool $isRune)
    {
        return $this->set('isRune', $isRune);
    }

    /**
     *
     * @return string
     */
    public function getTier()
    {
        return $this->get('tier', '');
    }


    /**
     * @param string $tier
     * @return static
     */
    public function setTier(string $tier)
    {
        return $this->set('tier', $tier);
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


}