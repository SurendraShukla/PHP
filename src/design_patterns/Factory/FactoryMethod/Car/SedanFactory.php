<?php

namespace design_patterns\Factory\FactoryMethod\Car;


class SedanFactory implements CarFactory
{
    public function makeCar(): Car
    {
        return new Sedan();
    }

}
