<?php

namespace Keiwen\RiotApi\Constants;


class Constants
{


    protected static $__validValues;


    /**
     * @return array
     */
    public static function getValidValues()
    {
        if(empty(static::$__validValues)) {
            $rClass = new \ReflectionClass(static::class);
            static::$__validValues = array_values($rClass->getConstants());
        }
        return static::$__validValues;
    }


}