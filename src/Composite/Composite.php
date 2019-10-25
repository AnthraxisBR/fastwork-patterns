<?php

namespace AnthraxisBR\FastWorkPatterns\Composite;

class Composite
{

    private $results = [];

    public function execute(Element $element){
        $this->appendResult($element->execute());
    }

    public function appendResult($result)
    {
        $this->results[] = $result;
    }
}