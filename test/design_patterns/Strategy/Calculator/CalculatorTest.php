<?php

namespace design_patterns\Strategy\Calculator;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use src\suren\design_patterns\Strategy\behaviour\DivideOperator;
use src\suren\design_patterns\Strategy\behaviour\MultiplyOperator;
use src\suren\design_patterns\Strategy\behaviour\RestOperator;
use src\suren\design_patterns\Strategy\behaviour\SumOperator;
use src\suren\design_patterns\Strategy\Calculator;


class CalculatorTest extends TestCase{

    private $calculator;

    public function setUp() {
        $this->calculator = new Calculator(20, 10);
    }

    /**
     * @test
     */
    public function sum() {
        Assert::assertSame(30, $this->calculator->operate(new SumOperator()));
    }

    /**
     * @test
     */
    public function multiply() {
        Assert::assertSame(200, $this->calculator->operate(new MultiplyOperator()));
    }

    /**
     * @test
     */
    public function divide(){
        Assert::assertSame(2, $this->calculator->operate(new DivideOperator()));
    }

    /**
     * @test
     */
    public function rest(){
        Assert::assertSame(10, $this->calculator->operate(new RestOperator()));
    }

}