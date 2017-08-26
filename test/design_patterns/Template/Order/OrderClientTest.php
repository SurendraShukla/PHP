<?php

namespace design_patterns\Template\Order;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class OrderClientTest extends TestCase
{

    public function test()
    {
        echo "\n$$$$$$$ NetOrder instance of the Template: $$$$$$$";
        $netOrder = new NetOrder();
        $netOrder->processOrder();
        echo "\n$$$$$$$ StoreOrder instance of the Template: $$$$$$$";
        $storeOrder = new StoreOrder();
        $storeOrder->processOrder();

        Assert::assertTrue(true);
    }

}