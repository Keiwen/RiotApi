<?php

namespace Keiwen\RiotApi\Cdn;


class DdragonCdn extends AbstractCdn
{

    protected static $cdnUrl = 'http://ddragon.leagueoflegends.com/cdn';
    protected static $cdnVersion = '6.1.1';

    protected static $patternProfileIcon = '/img/profileicon/%s.png';
    protected static $patternChampSquare = '/img/champion/%s.png';
    protected static $patternChampSplash = '/img/champion/splash/%s_%d.jpg';
    protected static $patternChampCard = '/img/champion/loading/%s_%d.jpg';
    protected static $patternPassive = '/img/passive/%s.png';
    protected static $patternAbility = '/img/spell/%s.png';
    protected static $patternRune = '/img/rune/%s.png';
    protected static $patternMastery = '/img/mastery/%s.png';
    protected static $patternItem = '/img/item/%s.png';
    protected static $patternMap = '/img/map/map%s.png';
    protected static $patternUiIcon = '/6.8.1/img/ui/%s.png';


    /**
     * @param $iconKey
     * @return string
     */
    public function getUiIconUrl($iconKey)
    {
        return $this->getCDNUrl(false) . sprintf(static::$patternUiIcon, $iconKey);
    }




}