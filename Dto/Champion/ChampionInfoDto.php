<?php

namespace Keiwen\RiotApi\Dto\Champion;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains champion information.
 */
class ChampionInfoDto extends DtoParent
{

    /**
     * Champion ID.
     * For static information correlating to champion IDs, please refer to the LoL Static Data API.
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
     * Indicates if the champion is active.
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
    public function setActive(bool $active) {
        return $this->set('active', $active);
    }

    /**
     * Bot enabled flag (for custom games).
     * @return bool
     */
    public function getBotEnabled()
    {
        return $this->get('botEnabled', false);
    }

    /**
     * @param bool $botEnabled
     * @return static
     */
    public function setBotEnabled(bool $botEnabled) {
        return $this->set('botEnabled', $botEnabled);
    }

    /**
     * Bot Match Made enabled flag (for Co-op vs. AI games).
     * @return bool
     */
    public function getBotMmEnabled()
    {
        return $this->get('botMmEnabled', false);
    }

    /**
     * @param bool $botMmEnabled
     * @return static
     */
    public function setBotMmEnabled(bool $botMmEnabled) {
        return $this->set('botMmEnabled', $botMmEnabled);
    }

    /**
     * Indicates if the champion is free to play.
     * Free to play champions are rotated periodically.
     * @return bool
     */
    public function getFreeToPlay()
    {
        return $this->get('freeToPlay', false);
    }

    /**
     * @param bool $freeToPlay
     * @return static
     */
    public function setFreeToPlay(bool $freeToPlay) {
        return $this->set('freeToPlay', $freeToPlay);
    }
    
    /**
     * Ranked play enabled flag.
     * @return bool
     */
    public function getRankedPlayEnabled()
    {
        return $this->get('rankedPlayEnabled', false);
    }

    /**
     * @param bool $rankedPlayEnabled
     * @return static
     */
    public function setRankedPlayEnabled(bool $rankedPlayEnabled) {
        return $this->set('rankedPlayEnabled', $rankedPlayEnabled);
    }




}