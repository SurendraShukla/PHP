<?php

namespace design_patterns\Factory\FactoryMethod\Computer;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ComputerFactoryTest extends TestCase
{
    public function test()
    {
        $pc = (new PCFactory())->getComputer("PC","2 GB","500 GB","2.4 GHz");
        $server = (new ServerFactory())->getComputer("Server","16 GB","1 TB","2.9 GHz");
        echo "\nFactory PC Config::".$pc;
        echo "\nFactory Server Config::".$server;

        Assert::assertTrue(true);
    }
}