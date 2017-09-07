<?php

namespace design_patterns\Decorator\CarTypes;


class SportsCar extends CarDecorator
{
    public function __construct(Car $c)
    {
        parent::__construct($c);
    }

    public function assemble()
    {
        parent::assemble();
        echo "\n Adding features of Sports CarTypes.";
    }

}
