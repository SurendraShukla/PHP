<?php

use PHPUnit\Framework\TestCase;
use coding_dojo\LastStoneFinder;

class LastStoneFinderTest extends TestCase {

    private $_lastStoneFinder;

    /**
     * @return LastStoneFinder
     */
    public function setup() {
        $this->_lastStoneFinder = new LastStoneFinder();
    }

    /**
     * @test
     */
    public function shouldReturn0InCaseOfNoOfStonesIs0() {
        $this->shouldValidateLastStoneFinder(array(0), 0, 0, 0);
    }

    /**
     * @test
     */
    public function shouldReturn0InCaseOfNoOfStonesIs1() {
        $this->shouldValidateLastStoneFinder(array(0), 1, 0, 0);
    }

    /**
     * @test
     */
    public function shouldReturnDiffNumberInCaseOfNoOfStonesIs2AndDiff1AndDiff2AreSame() {
        $output=$diff1=$diff2=rand(0,15);
        $this->shouldValidateLastStoneFinder(array($output), 2, $diff1, $diff2);
    }

    /**
     * @test
     */
    public function shouldReturn1And2InCaseOfNoOfStonesIs2() {
        $this->shouldValidateLastStoneFinder(array(1,2), 2, 1, 2);
    }

    /**
     * @test
     */
    public function shouldReturn2InCaseOfNoOfStonesIs3ForDiff1AndDiff2Are1() {
        $this->shouldValidateLastStoneFinder(array(2), 3, 1, 1);
    }

    /**
     * @test
     */
    public function shouldReturn234InCaseOfNoOfStonesIs3AndDiff1Is1AndDiff2Is2()
    {
        $this->shouldValidateLastStoneFinder(array(2,3,4), 3, 1, 2);
    }

    /**
     * @test
     */
    public function shouldReturn456InCaseOfNoOfStonesIs3AndDiff1Is2AndDiff2Is3() {
        $this->shouldValidateLastStoneFinder(array(4,5,6), 3, 2, 3);
    }


    /**
     * @test
     */
    public function shouldReturn456InCaseOfNoOfStonesIs4AndDiff1Is2AndDiff2Is3() {
        $this->shouldValidateLastStoneFinder(array(0,1,2,3), 4, 0, 1);
        $this->shouldValidateLastStoneFinder(array(0,2,4,6), 4, 0, 2);
    }

    /**
     * @test
     */
    public function shouldReturn45666InCaseOfNoOfStonesIs4AndDiff1Is2AndDiff2Is3() {
        $this->shouldValidateLastStoneFinder(array(4,5,6,7,8), 5, 1, 2);
        $this->shouldValidateLastStoneFinder(array(8,9,10,11,12), 5, 2, 3);
    }


    /**
     * @param mixed $expected
     * @param mixed $noOfStones
     * @param string $diff1
     * @param float|int $diff2
     */
    public function shouldValidateLastStoneFinder($expected, $noOfStones, $diff1, $diff2)
    {
        $this->assertEquals($expected, $this->_lastStoneFinder->lastStoneNumber($noOfStones, $diff1, $diff2));
    }
}