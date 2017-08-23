<?php

namespace design_patterns\Builder;

/* "Director" */
class TeaMaker
{
    private $teaBuilder;

    public function setTeaBuilder(TeaBuilder $teaBuilder)
    {
        $this->teaBuilder = $teaBuilder;
    }

    public function getTea(): Tea
    {
        return $this->teaBuilder->getTea();
    }

    public function prepareTea()
    {
        $this->teaBuilder->startPreparingTea();
        $this->teaBuilder->addWater();
        $this->teaBuilder->addMilk();
        $this->teaBuilder->addSugar();
    }

}