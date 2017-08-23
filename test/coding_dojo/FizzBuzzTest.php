<?php

namespace test\tdd;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use tdd\FizzBuzz;

class FizzBuzzTest extends TestCase {

    private $fizzBuzzObj;

    public function setUp()
    {
        $this->fizzBuzzObj = new FizzBuzz();
    }

    /**
     * @test
     */
    public function shouldBeToGetFizzBuzzString() {
        $this->assertEquals(1, $this->fizzBuzzObj->getFizzBuzzString(1));
    }

    /**
     * @test
     */
    public function shouldReturnPassedNumberAsItIs() {
        $this->assertEquals(2, $this->fizzBuzzObj->getFizzBuzzString(2));
        $this->assertEquals(4, $this->fizzBuzzObj->getFizzBuzzString(4));
    }

    /**
     * @test
     */
    public function shouldReturnFizzIf3IsPassed() {
        $this->assertEquals('Fizz', $this->fizzBuzzObj->getFizzBuzzString(3));
    }

    /**
     * @test
     */
    public function shouldReturnBuzzIf5IsPassed() {
        $this->assertEquals('Buzz', $this->fizzBuzzObj->getFizzBuzzString(5));
    }

    /**
     * @test
     */
    public function shouldReturnFizzIfPassedNumberIsDivisibleBy3() {
        $this->assertEquals('Fizz', $this->fizzBuzzObj->getFizzBuzzString(6));
        $this->assertEquals('Fizz', $this->fizzBuzzObj->getFizzBuzzString(9));
    }

    /**
     * @test
     */
    public function shouldReturnBuzzIfPassedNumberIsDivisibleBy5() {
        $this->assertEquals('Buzz', $this->fizzBuzzObj->getFizzBuzzString(10));
    }

    /**
     * @test
     */
    public function shouldReturnFizzBuzzIfPassedNumberIs15() {
        $this->assertEquals('FizzBuzz', $this->fizzBuzzObj->getFizzBuzzString(15));
    }

    /**
     * @test
     */
    public function shouldReturnFizzBuzzIfPassedNumberIsDivisibleBy15() {
        $this->assertEquals('FizzBuzz', $this->fizzBuzzObj->getFizzBuzzString(30));
    }

    /**
     * @test
     */
    public function shouldReturnFizzBuzzStringForSpecifiedLimit() {
        $this->assertEquals([1,2,'Fizz'], $this->fizzBuzzObj->getFizzBuzzStringForSpecifiedLimit(3));
        $this->assertEquals([1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz'], $this->fizzBuzzObj->getFizzBuzzStringForSpecifiedLimit(15));
    }

    /**
     * @test
     * @expectedException
     */
    public function shouldThrowAnExceptionIfStringIsPassedToGetFizzBuzzStringForSpecifiedLimit() {
        $this->expectException(InvalidArgumentException::class);
        $this->fizzBuzzObj->getFizzBuzzStringForSpecifiedLimit(0);
    }

}
