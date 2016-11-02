<?php

namespace Keiwen\RiotApi\Dto\Player;
use Keiwen\RiotApi\Constants\Lane;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains all timeline information
 */
class ParticipantTimelineDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['ancientGolemAssistsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['ancientGolemKillsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['assistedLaneDeathsPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['assistedLaneKillsPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['baronAssistsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['baronKillsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['creepsPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['csDiffPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['damageTakenDiffPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['damageTakenPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['dragonAssistsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['dragonKillsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['elderLizardAssistsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['elderLizardKillsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['goldPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['inhibitorAssistsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['inhibitorKillsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['towerAssistsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['towerKillsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['towerKillsPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['vilemawAssistsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['vilemawKillsPerMinCounts'] = ParticipantTimelineDataDto::class;
        $included['wardsPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['xpDiffPerMinDeltas'] = ParticipantTimelineDataDto::class;
        $included['xpPerMinDeltas'] = ParticipantTimelineDataDto::class;
        return $included;
    }


    /**
     * Ancient golem assists per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getAncientGolemAssistsPerMinCounts()
    {
        return $this->get('ancientGolemAssistsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $ancientGolemAssistsPerMinCounts
     * @return static
     */
    public function setAncientGolemAssistsPerMinCounts(ParticipantTimelineDataDto $ancientGolemAssistsPerMinCounts)
    {
        return $this->set('ancientGolemAssistsPerMinCounts', $ancientGolemAssistsPerMinCounts);
    }

    /**
     * Ancient golem kills per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getAncientGolemKillsPerMinCounts()
    {
        return $this->get('ancientGolemKillsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $ancientGolemKillsPerMinCounts
     * @return static
     */
    public function setAncientGolemKillsPerMinCounts(ParticipantTimelineDataDto $ancientGolemKillsPerMinCounts)
    {
        return $this->set('ancientGolemKillsPerMinCounts', $ancientGolemKillsPerMinCounts);
    }

    /**
     * Assisted lane deaths per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getAssistedLaneDeathsPerMinDeltas()
    {
        return $this->get('assistedLaneDeathsPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $assistedLaneDeathsPerMinDeltas
     * @return static
     */
    public function setAssistedLaneDeathsPerMinDeltas(ParticipantTimelineDataDto $assistedLaneDeathsPerMinDeltas)
    {
        return $this->set('assistedLaneDeathsPerMinDeltas', $assistedLaneDeathsPerMinDeltas);
    }

    /**
     * Assisted lane kills per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getAssistedLaneKillsPerMinDeltas()
    {
        return $this->get('assistedLaneKillsPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $assistedLaneKillsPerMinDeltas
     * @return static
     */
    public function setAssistedLaneKillsPerMinDeltas(ParticipantTimelineDataDto $assistedLaneKillsPerMinDeltas)
    {
        return $this->set('assistedLaneKillsPerMinDeltas', $assistedLaneKillsPerMinDeltas);
    }

    /**
     * Baron assists per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getBaronAssistsPerMinCounts()
    {
        return $this->get('baronAssistsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $baronAssistsPerMinCounts
     * @return static
     */
    public function setBaronAssistsPerMinCounts(ParticipantTimelineDataDto $baronAssistsPerMinCounts)
    {
        return $this->set('baronAssistsPerMinCounts', $baronAssistsPerMinCounts);
    }

    /**
     * Baron kills per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getBaronKillsPerMinCounts()
    {
        return $this->get('baronKillsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $baronKillsPerMinCounts
     * @return static
     */
    public function setBaronKillsPerMinCounts(ParticipantTimelineDataDto $baronKillsPerMinCounts)
    {
        return $this->set('baronKillsPerMinCounts', $baronKillsPerMinCounts);
    }

    /**
     * Creeps per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getCreepsPerMinDeltas()
    {
        return $this->get('creepsPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $creepsPerMinDeltas
     * @return static
     */
    public function setCreepsPerMinDeltas(ParticipantTimelineDataDto $creepsPerMinDeltas)
    {
        return $this->set('creepsPerMinDeltas', $creepsPerMinDeltas);
    }

    /**
     * Creep score difference per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getCsDiffPerMinDeltas()
    {
        return $this->get('csDiffPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $csDiffPerMinDeltas
     * @return static
     */
    public function setCsDiffPerMinDeltas(ParticipantTimelineDataDto $csDiffPerMinDeltas)
    {
        return $this->set('csDiffPerMinDeltas', $csDiffPerMinDeltas);
    }

    /**
     * Damage taken difference per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getDamageTakenDiffPerMinDeltas()
    {
        return $this->get('damageTakenDiffPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $damageTakenDiffPerMinDeltas
     * @return static
     */
    public function setDamageTakenDiffPerMinDeltas(ParticipantTimelineDataDto $damageTakenDiffPerMinDeltas)
    {
        return $this->set('damageTakenDiffPerMinDeltas', $damageTakenDiffPerMinDeltas);
    }

    /**
     * Damage taken per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getDamageTakenPerMinDeltas()
    {
        return $this->get('damageTakenPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $damageTakenPerMinDeltas
     * @return static
     */
    public function setDamageTakenPerMinDeltas(ParticipantTimelineDataDto $damageTakenPerMinDeltas)
    {
        return $this->set('damageTakenPerMinDeltas', $damageTakenPerMinDeltas);
    }

    /**
     * Dragon assists per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getDragonAssistsPerMinCounts()
    {
        return $this->get('dragonAssistsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $dragonAssistsPerMinCounts
     * @return static
     */
    public function setDragonAssistsPerMinCounts(ParticipantTimelineDataDto $dragonAssistsPerMinCounts)
    {
        return $this->set('dragonAssistsPerMinCounts', $dragonAssistsPerMinCounts);
    }

    /**
     * Dragon kills per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getDragonKillsPerMinCounts()
    {
        return $this->get('dragonKillsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $dragonKillsPerMinCounts
     * @return static
     */
    public function setDragonKillsPerMinCounts(ParticipantTimelineDataDto $dragonKillsPerMinCounts)
    {
        return $this->set('dragonKillsPerMinCounts', $dragonKillsPerMinCounts);
    }

    /**
     * Elder lizard assists per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getElderLizardAssistsPerMinCounts()
    {
        return $this->get('elderLizardAssistsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $elderLizardAssistsPerMinCounts
     * @return static
     */
    public function setElderLizardAssistsPerMinCounts(ParticipantTimelineDataDto $elderLizardAssistsPerMinCounts)
    {
        return $this->set('elderLizardAssistsPerMinCounts', $elderLizardAssistsPerMinCounts);
    }

    /**
     * Elder lizard kills per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getElderLizardKillsPerMinCounts()
    {
        return $this->get('elderLizardKillsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $elderLizardKillsPerMinCounts
     * @return static
     */
    public function setElderLizardKillsPerMinCounts(ParticipantTimelineDataDto $elderLizardKillsPerMinCounts)
    {
        return $this->set('elderLizardKillsPerMinCounts', $elderLizardKillsPerMinCounts);
    }

    /**
     * Gold per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getGoldPerMinDeltas()
    {
        return $this->get('goldPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $goldPerMinDeltas
     * @return static
     */
    public function setGoldPerMinDeltas(ParticipantTimelineDataDto $goldPerMinDeltas)
    {
        return $this->set('goldPerMinDeltas', $goldPerMinDeltas);
    }

    /**
     * Inhibitor assists per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getInhibitorAssistsPerMinCounts()
    {
        return $this->get('inhibitorAssistsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $inhibitorAssistsPerMinCounts
     * @return static
     */
    public function setInhibitorAssistsPerMinCounts(ParticipantTimelineDataDto $inhibitorAssistsPerMinCounts)
    {
        return $this->set('inhibitorAssistsPerMinCounts', $inhibitorAssistsPerMinCounts);
    }

    /**
     * Inhibitor kills per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getInhibitorKillsPerMinCounts()
    {
        return $this->get('inhibitorKillsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $inhibitorKillsPerMinCounts
     * @return static
     */
    public function setInhibitorKillsPerMinCounts(ParticipantTimelineDataDto $inhibitorKillsPerMinCounts)
    {
        return $this->set('inhibitorKillsPerMinCounts', $inhibitorKillsPerMinCounts);
    }


    /**
     * Participant's lane (Legal values: MID, MIDDLE, TOP, JUNGLE, BOT, BOTTOM)
     * @return string
     */
    public function getLane()
    {
        return $this->get('lane', Lane::MID);
    }


    /**
     * @param string $lane
     * @return static
     */
    public function setLane(string $lane)
    {
        return $this->set('lane', $lane);
    }

    /**
     * Participant's role
     * (Legal values: DUO, NONE, SOLO, DUO_CARRY, DUO_SUPPORT)
     * @return string
     */
    public function getRole()
    {
        return $this->get('role', 'NONE');
    }


    /**
     * @param string $role
     * @return static
     */
    public function setRole(string $role)
    {
        return $this->set('role', $role);
    }

    /**
     * Tower assists per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getTowerAssistsPerMinCounts()
    {
        return $this->get('towerAssistsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $towerAssistsPerMinCounts
     * @return static
     */
    public function setTowerAssistsPerMinCounts(ParticipantTimelineDataDto $towerAssistsPerMinCounts)
    {
        return $this->set('towerAssistsPerMinCounts', $towerAssistsPerMinCounts);
    }

    /**
     * Tower kills per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getTowerKillsPerMinCounts()
    {
        return $this->get('towerKillsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $towerKillsPerMinCounts
     * @return static
     */
    public function setTowerKillsPerMinCounts(ParticipantTimelineDataDto $towerKillsPerMinCounts)
    {
        return $this->set('towerKillsPerMinCounts', $towerKillsPerMinCounts);
    }

    /**
     * Tower kills per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getTowerKillsPerMinDeltas()
    {
        return $this->get('towerKillsPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $towerKillsPerMinDeltas
     * @return static
     */
    public function setTowerKillsPerMinDeltas(ParticipantTimelineDataDto $towerKillsPerMinDeltas)
    {
        return $this->set('towerKillsPerMinDeltas', $towerKillsPerMinDeltas);
    }

    /**
     * Vilemaw assists per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getVilemawAssistsPerMinCounts()
    {
        return $this->get('vilemawAssistsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $vilemawAssistsPerMinCounts
     * @return static
     */
    public function setVilemawAssistsPerMinCounts(ParticipantTimelineDataDto $vilemawAssistsPerMinCounts)
    {
        return $this->set('vilemawAssistsPerMinCounts', $vilemawAssistsPerMinCounts);
    }

    /**
     * Vilemaw kills per minute timeline counts
     * @return ParticipantTimelineDataDto
     */
    public function getVilemawKillsPerMinCounts()
    {
        return $this->get('vilemawKillsPerMinCounts', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $vilemawKillsPerMinCounts
     * @return static
     */
    public function setVilemawKillsPerMinCounts(ParticipantTimelineDataDto $vilemawKillsPerMinCounts)
    {
        return $this->set('vilemawKillsPerMinCounts', $vilemawKillsPerMinCounts);
    }

    /**
     * Wards placed per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getWardsPerMinDeltas()
    {
        return $this->get('wardsPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $wardsPerMinDeltas
     * @return static
     */
    public function setWardsPerMinDeltas(ParticipantTimelineDataDto $wardsPerMinDeltas)
    {
        return $this->set('wardsPerMinDeltas', $wardsPerMinDeltas);
    }

    /**
     * Experience difference per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getXpDiffPerMinDeltas()
    {
        return $this->get('xpDiffPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $xpDiffPerMinDeltas
     * @return static
     */
    public function setXpDiffPerMinDeltas(ParticipantTimelineDataDto $xpDiffPerMinDeltas)
    {
        return $this->set('xpDiffPerMinDeltas', $xpDiffPerMinDeltas);
    }

    /**
     * Experience per minute timeline data
     * @return ParticipantTimelineDataDto
     */
    public function getXpPerMinDeltas()
    {
        return $this->get('xpPerMinDeltas', new ParticipantTimelineDataDto());
    }


    /**
     * @param ParticipantTimelineDataDto $xpPerMinDeltas
     * @return static
     */
    public function setXpPerMinDeltas(ParticipantTimelineDataDto $xpPerMinDeltas)
    {
        return $this->set('xpPerMinDeltas', $xpPerMinDeltas);
    }



}