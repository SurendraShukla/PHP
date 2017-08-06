<?php

use PHPUnit\Framework\TestCase;

class GCD extends TestCase {

    /**
     * @test
     */
    public function testGCD() {
        $this->assertEquals(1, self::getGCD(1, 1));
        $this->assertEquals(4, self::getGCD(12, 8));
        $this->assertEquals(6, self::getGCD(18, 84));
        $this->assertEquals(6, self::getGCD(48, 18));
        $this->assertEquals(12, self::getGCD(48, 180));
        $this->assertEquals(1, self::getGCD(9, 28));
    }

    public function getGCD($no1, $no2){
        return (($no1 % $no2) == 0) ? $no2 : self::getGCD($no2, ($no1 % $no2));
    }

}

?>s