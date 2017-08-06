<?php

use PHPUnit\Framework\TestCase;

class SwapNumberTest extends TestCase {

    /**
     * @test
     */
    public function shouldSwapTwoNumbers() {
        $a=0;
        $b=20;
        $this->callAllSwappingMethods($a, $b);

        $a=10;
        $b=20;
        $this->callAllSwappingMethods($a, $b);

        $a=10;
        $b=5;
        $this->callAllSwappingMethods($a, $b);
    }

    private function callAllSwappingMethods($a, $b) {
        $this->assertEquals(array($b, $a), SwapNumbers::swapNumberUsingArithmeticOperators($a, $b));
        $this->assertEquals(array($b, $a), SwapNumbers::swapNumbersUsingBitwiseXOR($a, $b));
    }
}