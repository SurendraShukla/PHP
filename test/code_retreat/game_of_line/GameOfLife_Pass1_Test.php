<?php

namespace code_retreat\game_of_life;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class GameOfLife_Pass1_Test extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnNullForEmptyArray()
    {
        $arr[][] = [];
        $gameOfLife = new GameOfLife_Pass1($arr);
        Assert::assertEquals(false, $gameOfLife->getStateOfTheCell(0, 0));
    }

    /**
     * @test
     */
    public function shouldReturnDiedForAllIndexsIf2DimensionalArrayIsPassedWithAllDeadCells()
    {
        $arr = [[0,0], [0,0]];
        $gameOfLife = new GameOfLife_Pass1($arr);
        Assert::assertEquals(false, $gameOfLife->getStateOfTheCell(0, 0));
        Assert::assertEquals(false, $gameOfLife->getStateOfTheCell(0, 1));
        Assert::assertEquals(false, $gameOfLife->getStateOfTheCell(1, 0));
        Assert::assertEquals(false, $gameOfLife->getStateOfTheCell(1, 1));
    }


    /**
     * @test
     */
    public function shouldReturnAlive()
    {
        $arr = [[1,1], [1,0]];
        $gameOfLife = new GameOfLife_Pass1($arr);
        Assert::assertEquals(false, $gameOfLife->getStateOfTheCell(0, 0));
        Assert::assertEquals(false, $gameOfLife->getStateOfTheCell(0, 1));
        Assert::assertEquals(false, $gameOfLife->getStateOfTheCell(1, 0));
        Assert::assertEquals(true, $gameOfLife->getStateOfTheCell(1, 1));
    }


}