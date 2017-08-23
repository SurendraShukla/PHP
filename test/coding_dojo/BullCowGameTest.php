<?php

use PHPUnit\Framework\TestCase;
use coding_dojo\BullCowGame;

class BullCowGameTest extends TestCase {

    private $bullCowGame;

    public function setUp() {
        $this->bullCowGame = new BullCowGame();
    }

    /**
     * @test
     */
    public function shouldReturn0B0C_IfGuessesNotMatchingInSecretNumber() {
        $result = $this->bullCowGame->getBullCowCount("1234", "5678");
        $this->assertEquals('0B0C', $result);
    }

    /**
     * @test
     */
    public function shouldReturn1B0C_IfOneDigitIsMatchedAtSamePositionAndNoOtherMatching() {
        $result = $this->bullCowGame->getBullCowCount("1234", "1678");
        $this->assertEquals('1B0C', $result);
    }

    /**
     * @test
     */
    public function shouldReturn0B1C_IfOneCharIsPresentInGuessNumberutNoneCharAsMatchingPosition() {
        $result = $this->bullCowGame->getBullCowCount("1234", "6178");
        $this->assertEquals('0B1C', $result);
    }

    /**
     * @test
     */
    public function shouldReturn0B4C_If4CharIsPresentInGuessNumberButNoneCharAsMatchingPosition(){
        $result = $this->bullCowGame->getBullCowCount("1234", "2143");
        $this->assertEquals('0B4C', $result);

        $result = $this->bullCowGame->getBullCowCount("2113", "4116");
        $this->assertEquals('2B0C', $result);
    }

}