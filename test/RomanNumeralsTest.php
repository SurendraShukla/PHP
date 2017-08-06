<?php

namespace test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use src\RomanNumerals;

class RomanNumeralsTest extends TestCase {

    /**
     * @test
     */
    public function shouldReturnIFor1() {
        Assert::assertEquals('I', RomanNumerals::arabicToRoman(1));
    }

    /**
     * @test
     */
    public function shouldReturnIIFor2() {
        Assert::assertEquals('II', RomanNumerals::arabicToRoman(2));
    }

    /**
     * @test
     */
    public function shouldReturnIIIFor3(){
        Assert::assertEquals('III', RomanNumerals::arabicToRoman(3));
    }

    /**
     * @test
     */
    public function shouldReturnIVFor4(){
        Assert::assertEquals('IV', RomanNumerals::arabicToRoman(4));
    }

    /**
     * @test
     */
    public function shouldReturnVFor5(){
        Assert::assertEquals('V', RomanNumerals::arabicToRoman(5));
    }

    /**
     * @test
     */
    public function six(){
        Assert::assertEquals('VI', RomanNumerals::arabicToRoman(6));
    }

    /**
     * @test
     */
    public function nine(){
        Assert::assertEquals('IX', RomanNumerals::arabicToRoman(9));
    }

    /**
     * @test
     */
    public function twoThousandFourHundredNinetyNine(){
        Assert::assertEquals('MMCDXCIX', RomanNumerals::arabicToRoman(2499));
    }

    /**
     * @test
     */
    public function threeThousandNineHundredFortyNine(){
        Assert::assertEquals('MMMCMXLIX', RomanNumerals::arabicToRoman(3949));
    }

}


// https://remonsinnema.com/2011/12/05/practicing-tdd-using-the-roman-numerals-kata/
// https://www.youtube.com/watch?v=kZaImEXhg1o


