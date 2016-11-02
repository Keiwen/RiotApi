<?php

namespace Keiwen\RiotApi\Dto\Rune;
use Keiwen\RiotApi\Dto\Data\BasicDataDto;


/**
 * This object contains rune data.
 */
class RuneDto extends BasicDataDto
{

    /**
     * @inheritdoc
     * @deprecated
     */
    public function getGold()
    {
        return array();
    }


    /**
     * @inheritdoc
     * @deprecated
     */
    public function setGold(array $gold)
    {
        return $this;
    }

}