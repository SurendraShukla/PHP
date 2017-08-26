<?php

namespace design_patterns\Template\House;


abstract class HouseTemplate
{

    // Template method, final so subclasses can't override
    public final function buildHouse()
    {
        $this->buildFoundation();
        $this->buildPillars();
        $this->buildWalls();
        $this->buildWindows();
        echo "\nHouse is built.";
    }

    // Default implementation
    private function buildWindows()
    {
        echo "\nBuilding Glass Windows";
    }

    // Methods to be implemented by subclasses
    public abstract function buildWalls();

    public abstract function buildPillars();

    private function buildFoundation()
    {
        echo "\nBuilding foundation with cement,iron rods and sand";
    }

}
