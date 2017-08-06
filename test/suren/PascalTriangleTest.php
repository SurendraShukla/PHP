<?php

use PHPUnit\Framework\TestCase;

class PascalTriangleTest extends TestCase {

    /**
     * @test
     */
    public function shouldReturnOneIfRowIs0() {
        $rows = 0;
        $expectedArray = array(0=>array(1));

        $this->_callPascalTriangle($rows, $expectedArray);
        $this->_callPascalTriangleRecursion($rows, $expectedArray);
    }

    /**
     * @test
     */
    public function shouldReturn3CharactersIfRowIs1() {
        $rows = 1;
        $expectedArray = array(
            0=>array(1),
            1=>array(1,1),
        );

        $this->_callPascalTriangle($rows, $expectedArray);
        $this->_callPascalTriangleRecursion($rows, $expectedArray);
    }


    /**
     * @test
     */
    public function shouldReturn28CharactersIfRowIs6() {
        $rows = 6;
        $expectedArray = array(
            0=>array(1),
            1=>array(1,1),
            2=>array(1,2,1),
            3=>array(1,3,3,1),
            4=>array(1,4,6,4,1),
            5=>array(1,5,10,10,5,1),
            6=>array(1,6,15,20,15,6,1),
        );

        $this->_callPascalTriangle($rows, $expectedArray);
        $this->_callPascalTriangleRecursion($rows, $expectedArray);
    }

    private function _callPascalTriangle($rows, $expectedArray) {
        $pascalTriangle = new PascalTriangle($expectedArray);
        $this->assertEquals($expectedArray, $pascalTriangle->getPascalTriangle($rows));
    }

    private function _callPascalTriangleRecursion($rows, $expectedArray) {
        $pascalTriangleRecursion = new PascalTriangleRecursion($expectedArray);
        $this->assertEquals($expectedArray, $pascalTriangleRecursion->getPascalTriangle($rows));
    }
} 