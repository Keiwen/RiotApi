<?php

namespace Keiwen\RiotApi\Services\DataGlobal;


use Keiwen\RiotApi\Dto\Champion\ChampionDto;
use Keiwen\RiotApi\Dto\Champion\ChampionListDto;
use Keiwen\RiotApi\Dto\Data\LanguageStringsDto;
use Keiwen\RiotApi\Dto\Data\RealmDto;
use Keiwen\RiotApi\Dto\DtoParent;
use Keiwen\RiotApi\Dto\Item\ItemDto;
use Keiwen\RiotApi\Dto\Item\ItemListDto;
use Keiwen\RiotApi\Dto\Map\MapDataDto;
use Keiwen\RiotApi\Dto\Mastery\MasteryDto;
use Keiwen\RiotApi\Dto\Mastery\MasteryListDto;
use Keiwen\RiotApi\Dto\Rune\RuneDto;
use Keiwen\RiotApi\Dto\Rune\RuneListDto;
use Keiwen\RiotApi\Dto\Spell\SummonerSpellDto;
use Keiwen\RiotApi\Dto\Spell\SummonerSpellListDto;
use Keiwen\RiotApi\Services\AbstractService;
use Keiwen\RiotApi\Services\ServiceRegistry;

class StaticData extends AbstractService
{

    protected $urlPattern = '/api/lol/static-data/{region}/{version}';

    protected static function getServiceName() : string
    {
        return ServiceRegistry::LOL_STATIC_DATA;
    }


    /**
     * Retrieves champion list
     * @param string $locale
     * @param string $version
     * @param bool   $dataById
     * @param array  $champData
     * @param string $region
     * @return array|ChampionListDto|\stdClass|string
     */
    public function getChampions(string $locale = '', string $version = '', bool $dataById = false, array $champData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if($dataById) $queryParam['dataById'] = 'true';
        if(!empty($champData)) $queryParam['champData'] = implode(',', $champData);
        return $this->query("champion", ChampionListDto::class, $region, $queryParam);
    }

    /**
     * Retrieves a champion by its id
     * @param int    $id
     * @param string $locale
     * @param string $version
     * @param array  $champData
     * @param string $region
     * @return array|ChampionDto|\stdClass|string
     */
    public function getChampion(int $id, string $locale = '', string $version = '', array $champData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if(!empty($champData)) $queryParam['champData'] = implode(',', $champData);
        return $this->query("champion/$id", ChampionDto::class, $region, $queryParam);
    }

    /**
     * Retrieves item list
     * @param string $locale
     * @param string $version
     * @param array  $itemListData
     * @param string $region
     * @return array|ItemListDto|\stdClass|string
     */
    public function getItems(string $locale = '', string $version = '', array $itemListData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if(!empty($itemListData)) $queryParam['itemListData'] = implode(',', $itemListData);
        return $this->query("item", ItemListDto::class, $region, $queryParam);
    }

    /**
     * Retrieves item by its unique id
     * @param int    $id
     * @param string $locale
     * @param string $version
     * @param array  $itemData
     * @param string $region
     * @return array|ItemDto|\stdClass|string
     */
    public function getItem(int $id, string $locale = '', string $version = '', array $itemData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if(!empty($itemData)) $queryParam['itemData'] = implode(',', $itemData);
        return $this->query("item/$id", ItemDto::class, $region, $queryParam);
    }

    /**
     * Retrieve supported languages data
     * @param string $region
     * @return array|DtoParent|\stdClass|string
     */
    public function getLanguages(string $region = '')
    {
        return $this->query("languages", DtoParent::class, $region);
    }

    /**
     * Retrieve language strings data
     * @param string $locale
     * @param string $version
     * @param string $region
     * @return array|LanguageStringsDto|\stdClass|string
     */
    public function getLanguageStrings(string $locale = '', string $version = '', string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        return $this->query("language-strings", LanguageStringsDto::class, $region, $queryParam);
    }

    /**
     * Retrieve map data
     * @param string $locale
     * @param string $version
     * @param string $region
     * @return array|MapDataDto|\stdClass|string
     */
    public function getMap(string $locale = '', string $version = '', string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        return $this->query("map", MapDataDto::class, $region, $queryParam);
    }

    /**
     * Retrieves mastery list
     * @param string $locale
     * @param string $version
     * @param array  $masteryListData
     * @param string $region
     * @return array|MasteryListDto|\stdClass|string
     */
    public function getMasteries(string $locale = '', string $version = '', array $masteryListData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if(!empty($masteryListData)) $queryParam['masteryListData'] = implode(',', $masteryListData);
        return $this->query("mastery", MasteryListDto::class, $region, $queryParam);
    }

    /**
     * Retrieves mastery item by its unique id
     * @param int    $id
     * @param string $locale
     * @param string $version
     * @param array  $masteryData
     * @param string $region
     * @return array|MasteryDto|\stdClass|string
     */
    public function getMastery(int $id, string $locale = '', string $version = '', array $masteryData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if(!empty($masteryData)) $queryParam['masteryData'] = implode(',', $masteryData);
        return $this->query("mastery/$id", MasteryDto::class, $region, $queryParam);
    }

    /**
     * Retrieve realm data
     * @param string $region
     * @return array|RealmDto|\stdClass|string
     */
    public function getRealm(string $region = '')
    {
        return $this->query("realm", RealmDto::class, $region);
    }

    /**
     * Retrieves rune list
     * @param string $locale
     * @param string $version
     * @param array  $runeListData
     * @param string $region
     * @return array|RuneListDto|\stdClass|string
     */
    public function getRunes(string $locale = '', string $version = '', array $runeListData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if(!empty($runeListData)) $queryParam['runeListData'] = implode(',', $runeListData);
        return $this->query("rune", RuneListDto::class, $region, $queryParam);
    }

    /**
     * Retrieves rune by its unique id
     * @param int    $id
     * @param string $locale
     * @param string $version
     * @param array  $runeData
     * @param string $region
     * @return array|RuneDto|\stdClass|string
     */
    public function getRune(int $id, string $locale = '', string $version = '', array $runeData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if(!empty($runeData)) $queryParam['runeData'] = implode(',', $runeData);
        return $this->query("rune/$id", RuneDto::class, $region, $queryParam);
    }

    /**
     * Retrieves summoner spell list
     * @param string $locale
     * @param string $version
     * @param bool   $dataById
     * @param array  $spellData
     * @param string $region
     * @return array|SummonerSpellListDto|\stdClass|string
     */
    public function getSummonerSpells(string $locale = '', string $version = '', bool $dataById = false, array $spellData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if($dataById) $queryParam['dataById'] = 'true';
        if(!empty($spellData)) $queryParam['spellData'] = implode(',', $spellData);
        return $this->query("summoner-spell", SummonerSpellListDto::class, $region, $queryParam);
    }

    /**
     * Retrieves summoner spell by its unique id
     * @param int    $id
     * @param string $locale
     * @param string $version
     * @param array  $spellData
     * @param string $region
     * @return array|SummonerSpellDto|\stdClass|string
     */
    public function getSummonerSpell(int $id, string $locale = '', string $version = '', array $spellData = array(), string $region = '')
    {
        $queryParam = array();
        if(!empty($locale)) $queryParam['locale'] = $locale;
        if(!empty($version)) $queryParam['version'] = $version;
        if(!empty($spellData)) $queryParam['spellData'] = implode(',', $spellData);
        return $this->query("summoner-spell/$id", SummonerSpellDto::class, $region, $queryParam);
    }

    /**
     * @param string $region
     * @return array|DtoParent|\stdClass|string
     */
    public function getVersions(string $region = '')
    {
        return $this->query("versions", DtoParent::class, $region);
    }




}
