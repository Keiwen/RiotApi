<?php

namespace Keiwen\RiotApi\Dto\Summoner;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains match list information
 */
class SummonerMatchReferenceListDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['matches'] = SummonerMatchReferenceDto::class;
        return $included;
    }


    /**
     *
     * @return int
     */
    public function getEndIndex()
    {
        return $this->get('endIndex', 0);
    }


    /**
     * @param int $endIndex
     * @return static
     */
    public function setEndIndex(int $endIndex)
    {
        return $this->set('endIndex', $endIndex);
    }


    /**
     *
     * @return SummonerMatchReferenceDto[]
     */
    public function getMatches()
    {
        return $this->get('matches', array());
    }


    /**
     * @param SummonerMatchReferenceDto[] $matches
     * @return static
     */
    public function setMatches($matches)
    {
        if(empty($matches)) $matches = array();
        return $this->set('matches', $matches);
    }

    /**
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->get('startIndex', 0);
    }


    /**
     * @param int $startIndex
     * @return static
     */
    public function setStartIndex(int $startIndex)
    {
        return $this->set('startIndex', $startIndex);
    }

    /**
     *
     * @return int
     */
    public function getTotalGames()
    {
        return $this->get('totalGames', 0);
    }


    /**
     * @param int $totalGames
     * @return static
     */
    public function setTotalGames(int $totalGames)
    {
        return $this->set('totalGames', $totalGames);
    }



}