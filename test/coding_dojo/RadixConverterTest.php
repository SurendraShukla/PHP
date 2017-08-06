<?php

use PHPUnit\Framework\TestCase;

class RadixConverterTest extends TestCase {
    
    public function testForDecimal() {
        $this->assertEquals(10, RadixConverter::convert(10, 10));
        $this->assertEquals(1341, RadixConverter::convert(1341, 10));
    }

    public function testForBinary() {
        $this->assertEquals(1, RadixConverter::convert(1, 2));
        $this->assertEquals(10100111101, RadixConverter::convert(1341, 2));
    }

    public function testForOctal() {
        $this->assertEquals('2475', RadixConverter::convert(1341, 8));
    }
    public function testForHexaDecimal() {
        $this->assertEquals('53D', RadixConverter::convert(1341, 16));
    }

    public function testFor30Base() {
        $this->assertEquals('1EL', RadixConverter::convert(1341, 30));
    }

}