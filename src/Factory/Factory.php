<?php


namespace AnthraxisBR\FastWorkPatterns\Factory;


class Factory
{
    public function create($class)
    {
        return new $class();
    }
}