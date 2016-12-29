<?php

namespace Keiwen\RiotApi\Dto\Shard;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 */
class IncidentDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['updates'] = MessageDto::class;
        return $included;
    }


    /**
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->get('active', false);
    }


    /**
     * @param bool $active
     * @return static
     */
    public function setActive(bool $active)
    {
        return $this->set('active', $active);
    }

    /**
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->get('created_at', '');
    }


    /**
     * @param string $createdAt
     * @return static
     */
    public function setCreatedAt(string $createdAt)
    {
        return $this->set('created_at', $createdAt);
    }

    /**
     *
     * @return int
     */
    public function getId()
    {
        return $this->get('id', 0);
    }


    /**
     * @param int $id
     * @return static
     */
    public function setId(int $id)
    {
        return $this->set('id', $id);
    }

    /**
     *
     * @return MessageDto[]
     */
    public function getUpdates()
    {
        return $this->get('updates', array());
    }


    /**
     * @param MessageDto[] $updates
     * @return static
     */
    public function setUpdates($updates)
    {
        if(empty($updates)) $updates = array();
        return $this->set('updates', $updates);
    }



}