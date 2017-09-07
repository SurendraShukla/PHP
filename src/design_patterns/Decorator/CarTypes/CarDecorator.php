<?php

namespace design_patterns\Decorator\CarTypes;


class CarDecorator implements Car
{
    protected $car;

    public function __construct(Car $c)
    {
        $this->car = $c;
    }

    public function assemble()
    {
        $this->car->assemble();
    }

}
