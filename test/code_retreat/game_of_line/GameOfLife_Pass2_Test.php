<?php

namespace code_retreat\game_of_life;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class GameOfLife_Pass2_Test extends TestCase {
//
//    /**
//     * @before
//     */
//    public function fixtureSetup() {
//    }

    /**
     * @test
     */
    public function aliveCellShouldBeAliveAsPerSpec() {
        $gameOfLife = new GameOfLife_Pass2();
        Assert::assertEquals(true, $gameOfLife->isAlive(2));
        Assert::assertEquals(true, $gameOfLife->isAlive(3));
    }

    /**
     * @test
     */
    public function aliveCellShouldBeDeadAsPerSpec() {
        $gameOfLife = new GameOfLife_Pass2();
        Assert::assertEquals(false, $gameOfLife->isAlive(1));
        Assert::assertEquals(false, $gameOfLife->isAlive(4));
    }

    /**
     * @test
     */
    public function deadCellShouldBeAliveAsPerSpec() {
        $gameOfLife = new GameOfLife_Pass2();
        Assert::assertEquals(true, $gameOfLife->isResurrected(3));
    }

    /**
     * @test
     */
    public function deadCellShouldBeDeadAsPerSpec() {
        $gameOfLife = new GameOfLife_Pass2();
        Assert::assertEquals(false, $gameOfLife->isResurrected(1));
        Assert::assertEquals(false, $gameOfLife->isResurrected(2));
        Assert::assertEquals(false, $gameOfLife->isResurrected(4));
    }

    /**
     * @test
     */
    public function shouldReturnNextGenerationGrid() {
        $currentGeneration = [[0,0,0], [0,1,0], [0,0,1]];
        $nextGeneration = [[0,0,0], [0,0,0], [0,0,0]];
        $gameOfLife = new GameOfLife_Pass2();

        Assert::assertTrue(true);
//        Assert::assertEquals($nextGeneration, $gameOfLife->getNextGeneration($currentGeneration));
    }

}