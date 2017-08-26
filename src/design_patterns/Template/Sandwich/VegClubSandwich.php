<?php

namespace design_patterns\Template\Sandwich;


class VegClubSandwich extends Sandwich
{
    function addVeggie()
    {
        echo "\nAdd Veggies";
    }

    function addCheese()
    {
        echo "\nAdd Cheese";
    }

    function addSauce()
    {
        echo "\nAdd Sauce";
    }

}