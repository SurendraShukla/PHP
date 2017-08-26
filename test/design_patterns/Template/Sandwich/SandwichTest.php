<?php

namespace design_patterns\Template\Sandwich;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class SandwichTest extends TestCase
{
    public function test()
    {
        $sandwichForCustomer1 = new VegClubSandwich();
        $sandwichForCustomer1->makeSandwich();

        echo "\n";
        $sandwichForCustomer2 = new CheeseSandwich();
        $sandwichForCustomer2->makeSandwich();

        Assert::assertTrue(true);
    }

}
