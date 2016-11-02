<?php
namespace Keiwen\RiotApi\Exceptions;


class UnhandledCacheException extends RiotApiException
{

    public function __construct(string $cacheClass, $methodsTried = array())
    {
        $message = "No method defined for cache class $cacheClass among [". implode(", ", $methodsTried) . "]";
        parent::__construct($message);
    }

}