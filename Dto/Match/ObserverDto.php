<?php

namespace Keiwen\RiotApi\Dto\Match;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 *
 */
class ObserverDto extends DtoParent
{


    /**
     * Key used to decrypt the spectator grid game data for playback
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->get('encryptionKey', '');
    }

    /**
     * @param string $encryptionKey
     * @return static
     */
    public function setEncryptionKey(string $encryptionKey) {
        return $this->set('encryptionKey', $encryptionKey);
    }


}