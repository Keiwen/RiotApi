<?php

namespace Keiwen\RiotApi\Cdn;


abstract class AbstractCdn
{

    protected static $cdnUrl = '';
    protected static $cdnVersion = '';

    protected static $patternProfileIcon = '';
    protected static $patternChampSquare = '';
    protected static $patternChampSplash = '';
    protected static $patternChampCard = '';
    protected static $patternPassive = '';
    protected static $patternAbility = '';
    protected static $patternRune = '';
    protected static $patternMastery = '';
    protected static $patternItem = '';
    protected static $patternMap = '';
    protected static $patternUiIcon = '';


    public function __construct(string $cdnVersion = '')
    {
        if(!empty($cdnVersion)) static::$cdnVersion = $cdnVersion;
    }

    /**
     * @param bool $withVersion
     * @return string
     */
    public function getCDNUrl(bool $withVersion = false)
    {
        $url = static::$cdnUrl;
        if($withVersion) {
            $url .= '/' . static::$cdnVersion;
        }
        return $url;
    }

    /**
     * @return string
     */
    public function getCDNVersion()
    {
        return static::$cdnVersion;
    }

	
    /**
     * @param string $cdnVersion
     */
    public static function setCDNVersion(string $cdnVersion)
    {
        static::$cdnVersion = $cdnVersion;
    }

	
    /**
     * @param $iconId
     * @return string
     */
	public function getProfileIconUrl($iconId)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternProfileIcon, $iconId);
	}


    /**
     * @param string $champKey
     * @return string
     */
    public function getChampSquareUrl(string $champKey)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternChampSquare, $champKey);
    }

    /**
     * @param string $champKey
     * @param int    $skin
     * @return string
     */
    public function getChampSplashUrl(string $champKey, int $skin = 0)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternChampSplash, $champKey, $skin);
    }

    /**
     * @param string $champKey
     * @param int    $skin
     * @return string
     */
    public function getChampCardUrl(string $champKey, int $skin = 0)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternChampCard, $champKey, $skin);
    }


    /**
     * @param string $passiveKey
     * @return string
     */
    public function getPassiveUrl(string $passiveKey)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternPassive, $passiveKey);
    }

    /**
     * @param string $abilityKey
     * @return string
     */
    public function getAbilityUrl(string $abilityKey)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternAbility, $abilityKey);
    }


    /**
     * @param $masteryId
     * @return string
     */
    public function getMasteryUrl($masteryId)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternMastery, $masteryId);
    }


    /**
     * @param $runeId
     * @return string
     */
    public function getRuneUrl($runeId)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternRune, $runeId);
    }


    /**
     * @param $itemId
     * @return string
     */
    public function getItemUrl($itemId)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternItem, $itemId);
    }


    /**
     * @param $mapId
     * @return string
     */
    public function getMapUrl($mapId)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternMap, $mapId);
    }

    /**
     * @param $iconKey
     * @return string
     */
    public function getUiIconUrl($iconKey)
    {
        return $this->getCDNUrl(true) . sprintf(static::$patternUiIcon, $iconKey);
    }




}
