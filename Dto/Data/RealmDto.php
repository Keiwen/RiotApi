<?php

namespace Keiwen\RiotApi\Dto\Data;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains realm data.
 */
class RealmDto extends DtoParent
{


    /**
     * The base CDN url.
     * @return string
     */
    public function getCdn()
    {
        return $this->get('cdn', '');
    }


    /**
     * @param string $cdn
     * @return static
     */
    public function setCdn(string $cdn)
    {
        return $this->set('cdn', $cdn);
    }

    /**
     * Latest changed version of Dragon Magic's css file.
     * @return string
     */
    public function getCss()
    {
        return $this->get('css', '');
    }


    /**
     * @param string $css
     * @return static
     */
    public function setCss(string $css)
    {
        return $this->set('css', $css);
    }

    /**
     * Latest changed version of Dragon Magic.
     * @return string
     */
    public function getDd()
    {
        return $this->get('dd', '');
    }


    /**
     * @param string $dd
     * @return static
     */
    public function setDd(string $dd)
    {
        return $this->set('dd', $dd);
    }

    /**
     * Default language for this realm.
     * @return string
     */
    public function getL()
    {
        return $this->get('l', '');
    }


    /**
     * @param string $l
     * @return static
     */
    public function setL(string $l)
    {
        return $this->set('l', $l);
    }

    /**
     * Legacy script mode for IE6 or older.
     * @return string
     */
    public function getLg()
    {
        return $this->get('lg', '');
    }


    /**
     * @param string $lg
     * @return static
     */
    public function setLg(string $lg)
    {
        return $this->set('lg', $lg);
    }

    /**
     * Map[string,string] Latest changed version for each data type listed.
     * @return string[]
     */
    public function getN()
    {
        return $this->get('n', array());
    }


    /**
     * @param string[] $n
     * @return static
     */
    public function setN(array $n)
    {
        return $this->set('n', $n);
    }

    /**
     * Special behavior number identifying the largest profileicon id that can be used under 500.
     * Any profileicon that is requested between this number and 500 should be mapped to 0.
     * @return int
     */
    public function getProfileiconmax()
    {
        return $this->get('profileiconmax', 0);
    }


    /**
     * @param int $profileiconmax
     * @return static
     */
    public function setProfileiconmax(int $profileiconmax)
    {
        return $this->set('profileiconmax', $profileiconmax);
    }

    /**
     * Additional api data drawn from other sources that may be related to data dragon functionality.
     * @return string
     */
    public function getStore()
    {
        return $this->get('store', '');
    }


    /**
     * @param string $store
     * @return static
     */
    public function setStore(string $store)
    {
        return $this->set('store', $store);
    }

    /**
     * Current version of this file for this realm.
     * @return string
     */
    public function getV()
    {
        return $this->get('v', '');
    }


    /**
     * @param string $v
     * @return static
     */
    public function setV(string $v)
    {
        return $this->set('v', $v);
    }


}