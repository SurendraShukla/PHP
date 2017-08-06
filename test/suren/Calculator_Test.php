<?php

namespace test\suren;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use src\suren\Calculator;

class Calculator_Test extends TestCase{

    private $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @test
     */
    public function sum(){
        Assert::assertSame(30, $this->calculator->sum(20, 10));
        Assert::assertNotSame('30', $this->calculator->sum(20, 10));
    }

    /**
     * @test
     */
    public function multiply() {
        Assert::assertSame(200, $this->calculator->multiply(20, 10));
    }

    /**
     * @test
     */
    public function divide(){
        Assert::assertSame(2, $this->calculator->divide(20, 10));
    }

    /**
     * @test
     */
    public function rest(){
        Assert::assertSame(10, $this->calculator->rest(20, 10));
    }

}