<?php

namespace design_patterns\Factory\FactoryMethod\Car;


interface CarFactory
{
    public function makeCar(): Car;
}
