<?php

namespace Keiwen\RiotApi\Cdn;


use Keiwen\RiotApi\Api\GlobalApi;
use Keiwen\RiotApi\Api\RiotApi;

class AutoDdragonCdn extends DdragonCdn
{

    protected static $cdnUrl = '';
    protected static $cdnVersion = '';



    public function __construct(GlobalApi $api)
    {
        parent::__construct();

        $realm = $api->getServiceStaticData()->getRealm('');
        if(!empty($realm)) {
            switch(RiotApi::detectOutputFormat($realm)) {
                case RiotApi::FORMAT_STDCLASS:
                    $realm = json_encode($realm);
                case RiotApi::FORMAT_JSON:
                    $realm = json_decode($realm, true);
                case RiotApi::FORMAT_ARRAY:
                    $this->setCDNUrl($realm['cdn']);
                    $this->setCDNVersion($realm['dd']);
                    break;
                case RiotApi::FORMAT_DTO;
                    $this->setCDNUrl($realm->getCdn());
                    $this->setCDNVersion($realm->getDd());
                    break;
            }
        }
    }


}
