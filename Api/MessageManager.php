<?php

namespace Keiwen\RiotApi\Api;


class MessageManager
{

    private $messages = array();

    const METHOD_STATIC = 'static';

    const TYPE_ERROR = 'error';
    const TYPE_INFO = 'info';
    const TYPE_ADMIN = 'admin';
    const TYPE_REQUEST = 'request';
    const TYPE_CACHE = 'cache';
    const TYPE_MEMORY = 'memory';
    const TYPE_RESPONSE = 'response';

    private $messageTypes = array(
        self::TYPE_ERROR => self::TYPE_ERROR,
        self::TYPE_INFO => self::TYPE_INFO,
        self::TYPE_ADMIN => self::TYPE_ADMIN,
        self::TYPE_CACHE => self::TYPE_CACHE,
        self::TYPE_MEMORY => self::TYPE_MEMORY,
        self::TYPE_REQUEST => self::TYPE_REQUEST,
        self::TYPE_RESPONSE => self::TYPE_RESPONSE,
    );


    /**
     * @param string $type internal type
     * @param string $message
     */
    public function addMessage(string $type, string $message)
    {
        if(empty($this->messageTypes[$type])) return;
        $externalType = $this->messageTypes[$type];
        $this->messages[] = array(
            'type' => $externalType,
            'msg' => $message,
        );
    }

    /**
     * @param string $type external type
     * @return array
     */
    public function getMessages(string $type = '')
    {
        if(empty($type)) return $this->messages;
        $list = array();
        foreach($this->messages as $message) {
            if($type == $message[$type]) {
                $list[] = $message;
            }
        }
        return $list;
    }

    /**
     *
     */
    public function clearMessages()
    {
        $this->messages = array();
    }


    /**
     * Type array structure: key is internal type, value is external type you need
     * @return array
     */
    public function getMessageTypes()
    {
        return $this->messageTypes;
    }

    /**
     * Type array structure: key is internal type, value is external type you need
     * Left external blank will skip message
     * @param array $redifined
     */
    public function redifinedMessageTypes(array $redifined)
    {
        foreach($redifined as $intType => $extType) {
            if(isset($this->messageTypes[$intType])) {
                $this->messageTypes[$intType] = $extType;
            }
        }
    }


}
