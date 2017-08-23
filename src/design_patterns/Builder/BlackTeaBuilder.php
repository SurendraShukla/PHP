<?php

namespace design_patterns\Builder;

/* "ConcreteBuilder" */
class BlackTeaBuilder extends TeaBuilder
{

    public function addMilk()
    {
        $this->tea->setMilkQuantity(0);
    }

    public function addWater()
    {
        $this->tea->setWaterQuantity(100);
    }

    public function addSugar()
    {
        $this->tea->setSugarSpoons(1);

    }
}