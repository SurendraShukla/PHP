<?php

use PHPUnit\Framework\TestCase;
use coding_dojo\Wrapper;

class WrapperTest extends TestCase {

    private $wrapper;
    private static $columnLength = 8;

    public function setUp() {
        $this->wrapper = new Wrapper(self::$columnLength);
    }

    /**
     * @test
     */
    public function shouldReturnEmptyStringForEmptyString() {
        $this->assertSame('', $this->wrapper->wrap(''));
    }

    /**
     * @test
     */
    public function shouldNotWrapStringIfInputIsLesserThanOrEqualColumnLength() {
        $this->assertEquals('word', $this->wrapper->wrap('word'));
        $this->assertEquals("surendra", $this->wrapper->wrap('surendra'));
    }

    /**
     * @test
     */
    public function shouldWrapStringIfInputIsBiggerThanColumnLength() {
        $this->assertEquals("alongwor\nd", $this->wrapper->wrap('alongword'));
    }

    /**
     * @test
     */
    public function shouldWrapStringAt2LinesIfInputIsMoreThanTwiceTheColumnLength() {
        $this->assertEquals("averyver\nylongwor\nd", $this->wrapper->wrap('averyverylongword'));
    }

    /**
     * @test
     */
    public function shouldNotWrapStringIfStringContainsSpaceAndStringIsSmallerThanOrEqualToColumnLength() {
        $this->assertEquals("abc xyz", $this->wrapper->wrap('abc xyz'));
        $this->assertEquals("abcd xyz", $this->wrapper->wrap('abcd xyz'));
        $this->assertEquals("voyager ", $this->wrapper->wrap('voyager '));
    }

    /**
     * @test
     */
    public function shouldWrapAtEndOfLineIfStringContainsSpaceAtLastAndStringIsEqualToColumnLength() {
        $this->assertEquals("surface\narea", $this->wrapper->wrap('surface area'));
    }

    /**
     * @test
     */
    public function shouldWrapStringAtSpaceIfStringContainsSpaceAndStringIsGreaterThanColumnLength() {
        $this->assertEquals("word\nword", $this->wrapper->wrap('word word'));
        $this->assertEquals("world\nis small", $this->wrapper->wrap('world is small'));
    }

    /**
     * @test
     */
    public function shouldWrapInMultipleLinesForStringGreaterThanColumnLength() {
        $this->assertEquals("wo rd\nword\nword", $this->wrapper->wrap('wo rd word word'));
    }


}