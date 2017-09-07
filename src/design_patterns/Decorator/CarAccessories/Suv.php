<?php

namespace design_patterns\Decorator\CarAccessories;


class Suv implements Car
{
    function cost()
    {
        return 30000;
    }

    function description ()
    {
        return "Suv";
    }

}