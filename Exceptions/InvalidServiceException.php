<?php
namespace Keiwen\RiotApi\Exceptions;


class InvalidServiceException extends RiotApiException
{

    public function __construct(string $service, string $api = '')
    {
        $message = 'Service %s not declared';
        if(!empty($api)) $message .= ' in api %s';
        $message = sprintf($message, $service, $api);
        parent::__construct($message);
    }

}