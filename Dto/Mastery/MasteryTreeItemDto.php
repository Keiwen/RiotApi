<?php

namespace Keiwen\RiotApi\Dto\Mastery;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains mastery tree item data.
 */
class MasteryTreeItemDto extends DtoParent
{

    /**
     *
     * @return int
     */
    public function getMasteryId()
    {
        return $this->get('masteryId', 0);
    }


    /**
     * @param int $masteryId
     * @return static
     */
    public function setMasteryId(int $masteryId)
    {
        return $this->set('masteryId', $masteryId);
    }

    /**
     *
     * @return string
     */
    public function getPrereq()
    {
        return $this->get('prereq', '');
    }


    /**
     * @param string $prereq
     * @return static
     */
    public function setPrereq(string $prereq)
    {
        return $this->set('prereq', $prereq);
    }


}