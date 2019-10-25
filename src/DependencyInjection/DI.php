<?php


namespace AnthraxisBR\FastWorkPatterns\DependencyInjection;


class DI
{

    private $instance;

    public function __construct(object $instance)
    {
        $this->instance = $instance;
    }
}