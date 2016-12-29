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
     * @param MasteryTreeListDto[] $cunning
     * @return static
     */
    public function setCunning($cunning)
    {
        if(empty($cunning)) $cunning = array();
        return $this->set('Cunning', $cunning);
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
     * @param MasteryTreeListDto[] $ferocity
     * @return static
     */
    public function setFerocity($ferocity)
    {
        if(empty($ferocity)) $ferocity = array();
        return $this->set('Ferocity', $ferocity);
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
     * @param MasteryTreeListDto[] $resolve
     * @return static
     */
    public function setResolve($resolve)
    {
        if(empty($resolve)) $resolve = array();
        return $this->set('Resolve', $resolve);
    }


}