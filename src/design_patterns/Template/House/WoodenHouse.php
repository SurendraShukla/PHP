<?php

namespace design_patterns\Template\House;


class WoodenHouse extends HouseTemplate
{
    public function buildWalls()
    {
        echo "\nBuilding Wooden Walls";
    }

    public function buildPillars()
    {
        echo "\nBuilding Pillars with Wood coating";
    }

}
