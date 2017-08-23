<?php

namespace design_patterns\Builder;

/* "ConcreteBuilder" */
class SpecialTeaBuilder extends TeaBuilder
{
    public function addMilk()
    {
        $this->tea->setMilkQuantity(80);
    }

    public function addWater()
    {
        $this->tea->setWaterQuantity(20);
    }

    public function addSugar()
    {
        $this->tea->setSugarSpoons(1);

    }

}