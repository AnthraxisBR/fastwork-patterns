<?php


namespace AnthraxisBR\FastWorkPatterns\Prototype;


class Prototype implements PrototypeInterface
{

    public function clone(): PrototypeInterface
    {
        return clone $this;
    }
}