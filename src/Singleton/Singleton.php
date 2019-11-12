<?php

namespace AnthraxisBR\FastWorkPatterns\Singleton;


class Singleton
{

    private static $instance;


    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
