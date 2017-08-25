<?php

namespace design_patterns\Facade\Computer;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ComputerFacadeTest extends TestCase
{
    public function test()
    {
        $computer = new ComputerFacade;
        $computer->start();

        Assert::assertTrue(true);
    }
}