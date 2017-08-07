<?php

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use src\SOLID\ISP\Violation\Parrot;
use src\SOLID\ISP\Violation\Penguin;
use src\SOLID\ISP\Violation\Pigeon;

class InterfaceSeperationTest extends TestCase {

    /**
     * @test
     */
    public function hasFatInterface() {

        $bird = new Parrot();
//        $bird = new Pigeon();
//        $bird = new Penguin();
        $bird->fly();
        Assert::assertTrue(true);
    }

}