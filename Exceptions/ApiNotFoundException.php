<?php
namespace Keiwen\RiotApi\Exceptions;


class ApiNotFoundException extends RiotApiException
{

    public function __construct(string $apiClass)
    {
        $message = sprintf('Api class %s not found', $apiClass);
        parent::__construct($message);
    }

}