<?php

namespace design_patterns\Decorator\CarAccessories;


abstract class CarFeature implements Car {
    protected $car;

    function __construct(Car $car)
    {
        $this->car = $car;
    }

    abstract function cost();

    abstract function description();
}

