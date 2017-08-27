<?php

namespace design_patterns\Factory\FactoryMethod\Car;


class HatchbackFactory implements CarFactory
{
    public function makeCar(): Car
    {
        return new Hatchback();
    }

}
