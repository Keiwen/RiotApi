<?php

namespace Keiwen\RiotApi\Dto\Mastery;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains mastery tree data.
 */
class MasteryTreeDto extends DtoParent
{



    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['Cunning'] = MasteryTreeListDto::class;
        $included['Ferocity'] = MasteryTreeListDto::class;
        $included['Resolve'] = MasteryTreeListDto::class;
        return $included;
    }


    /**
     *
     * @return MasteryTreeListDto[]
     */
    public function getCunning()
    {
        return $this->get('Cunning', array());
    }


    /**
     * @param MasteryTreeListDto[] $Cunning
     * @return static
     */
    public function setCunning(array $Cunning)
    {
        return $this->set('Cunning', $Cunning);
    }

    /**
     *
     * @return MasteryTreeListDto[]
     */
    public function getFerocity()
    {
        return $this->get('Ferocity', array());
    }


    /**
     * @param MasteryTreeListDto[] $Ferocity
     * @return static
     */
    public function setFerocity(array $Ferocity)
    {
        return $this->set('Ferocity', $Ferocity);
    }

    /**
     *
     * @return MasteryTreeListDto[]
     */
    public function getResolve()
    {
        return $this->get('Resolve', array());
    }


    /**
     * @param MasteryTreeListDto[] $Resolve
     * @return static
     */
    public function setResolve(array $Resolve)
    {
        return $this->set('Resolve', $Resolve);
    }


}