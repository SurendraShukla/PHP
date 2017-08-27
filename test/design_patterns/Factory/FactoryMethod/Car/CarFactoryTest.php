<?php

namespace design_patterns\Factory\FactoryMethod\Car;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CarFactoryTest extends TestCase
{
    public function test()
    {
        $factory = new SedanFactory();
        $car = $factory->makeCar();
        print $car->getType();

        Assert::assertTrue(true);
    }
}