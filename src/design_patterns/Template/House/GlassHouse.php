<?php

namespace design_patterns\Template\House;


class GlassHouse extends HouseTemplate
{
    public function buildWalls()
    {
        echo "\nBuilding Glass Walls";
    }

    public function buildPillars()
    {
        echo "\nBuilding Pillars with Glass coating";
    }

}