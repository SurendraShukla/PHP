<?php

namespace design_patterns\Decorator\CarTypes;


class BasicCar implements Car
{
    public function assemble()
    {
        echo "\nBasic CarTypes.";
    }

}
