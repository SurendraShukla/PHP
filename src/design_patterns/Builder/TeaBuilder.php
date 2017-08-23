<?php

namespace design_patterns\Builder;


abstract class TeaBuilder
{
    protected $tea;

    public function getTea(): Tea
    {
        return $this->tea;
    }

    public function startPreparingTea()
    {
        $this->tea = new Tea();
    }

    public abstract function addMilk();
    public abstract function addWater();
    public abstract function addSugar();

}