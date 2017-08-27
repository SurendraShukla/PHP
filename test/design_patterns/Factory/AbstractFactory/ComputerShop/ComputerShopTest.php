<?php

namespace design_patterns\Factory\AbstractFactory\ComputerShop;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ComputerShopTest extends TestCase
{
    public function testObject()
    {
        $factory = new HighBudgetMachine();
//        $factory = new LowBudgetMachine();
//        $factory = new AverageBudgetMachine();
        $shop = new ComputerShopObject($factory);
        $shop->assembleMachine();

        Assert::assertTrue(true);
    }

    public function testSwitch()
    {
//        $shop = new ComputerShopSwitch('high');
//        $shop = new ComputerShopSwitch('low');
        $shop = new ComputerShopSwitch('');
        $shop->assembleMachine();

        Assert::assertTrue(true);
    }
}