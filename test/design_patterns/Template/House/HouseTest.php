<?php

namespace design_patterns\Template\House;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class HouseTest extends TestCase
{
    public function test()
    {
        $houseType = new WoodenHouse();
		//using template method
		$houseType->buildHouse();

		echo "\n************";
		$houseType = new GlassHouse();
		$houseType->buildHouse();

		Assert::assertTrue(true);
    }
}