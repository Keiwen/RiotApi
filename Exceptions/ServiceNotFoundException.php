<?php
namespace Keiwen\RiotApi\Exceptions;


class ServiceNotFoundException extends RiotApiException
{

    public function __construct(string $serviceClass)
    {
        $message = sprintf('Service class %s not found', $serviceClass);
        parent::__construct($message);
    }

}