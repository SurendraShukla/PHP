<?php

namespace design_patterns\Factory\FactoryMethod\Car;


class hatchbackFactory implements CarFactory
{
    public function makeCar(): Car
    {
        return new Hatchback();
    }

}
