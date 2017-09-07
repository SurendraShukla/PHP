<?php

namespace design_patterns\Decorator\CarAccessories;


class SunRoof extends CarFeature {
    function cost ()
    {
        return $this->car->cost() + 1500;
    }

    function description()
    {
        return $this->car->description() . ",  sunroof";
    }
}
