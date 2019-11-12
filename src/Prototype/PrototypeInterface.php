<?php


namespace AnthraxisBR\FastWorkPatterns\Prototype;


interface PrototypeInterface
{
    public function clone() : PrototypeInterface;
}