<?php

namespace design_patterns\Decorator\CarAccessories;


class HighEndWheels extends CarFeature {
    function cost ()
    {
        return $this->car->cost() + 2000;
    }

    function description()
    {
        return $this->car->description() . ",  high end wheels";
    }
}
