<?php

namespace design_patterns\Decorator\CarTypes;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CarDecoratorTest extends TestCase
{
    public function test()
    {
        $sportsCar = new SportsCar(new BasicCar());
		$sportsCar->assemble();
		echo "\n*****";

		$sportsLuxuryCar = new SportsCar(new LuxuryCar(new BasicCar()));
		$sportsLuxuryCar->assemble();

		Assert::assertTrue(true);
    }
}