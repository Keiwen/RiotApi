<?php

namespace Keiwen\RiotApi\Dto\Player;



/**
 *
 */
class PlayerDto extends PlayerReferenceDto
{

    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['runes'] = PlayerRuneDto::class;
        $included['masteries'] = PlayerMasteryDto::class;
        return $included;
    }


    /**
     * The masteries used by this participant
     * @return PlayerMasteryDto[]
     */
    public function getMasteries()
    {
        return $this->get('masteries', array());
    }

    /**
     * @param PlayerMasteryDto[] $masteries
     * @return static
     */
    public function setMasteries(array $masteries) {
        return $this->set('masteries', $masteries);
    }

    /**
     * The runes used by this participant
     * @return PlayerRuneDto[]
     */
    public function getRunes()
    {
        return $this->get('runes', array());
    }

    /**
     * @param PlayerRuneDto[] $runes
     * @return static
     */
    public function setRunes(array $runes) {
        return $this->set('runes', $runes);
    }

    /**
     * The ID of the first summoner spell used by this participant
     * @return int
     */
    public function getSpell1Id()
    {
        return $this->get('spell1Id', 0);
    }

    /**
     * @param int $spell1Id
     * @return static
     */
    public function setSpell1Id(int $spell1Id) {
        return $this->set('spell1Id', $spell1Id);
    }

    /**
     * The ID of the second summoner spell used by this participant
     * @return int
     */
    public function getSpell2Id()
    {
        return $this->get('spell2Id', 0);
    }

    /**
     * @param int $spell2Id
     * @return static
     */
    public function setSpell2Id(int $spell2Id) {
        return $this->set('spell2Id', $spell2Id);
    }



}