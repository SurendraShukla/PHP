<?php

use PHPUnit\Framework\TestCase;

class FindMatchesTest extends TestCase {

    /**
     * @test
     */
    public function shouldGive0MatchesForLessThan2Participants() {
        $matchFinder = new MatchFinder();
        $this->assertEquals(1, $matchFinder->getTotalMatchesForParticipant(1));
    }

}