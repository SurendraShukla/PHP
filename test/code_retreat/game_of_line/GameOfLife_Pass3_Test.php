<?php

namespace code_retreat\game_of_life;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class GameOfLife_Pass3_Test extends TestCase
{

    /**
     * @test
     */
    public function getAllLiveNeighboursForGivenCell()
    {
        $gameOfLife = new GameOfLife_Pass3();
        $grid = [[0,0,0], [0,1,0], [0,0,1]];
        Assert::assertEquals(1, $gameOfLife->getLiveNeighbourCount($grid, 1, 1));


        $grid = [[0,0,0], [1,1,0], [0,1,1]];
        Assert::assertEquals(3, $gameOfLife->getLiveNeighbourCount($grid, 1, 1));


        $grid = [[1,1,1], [1,1,1], [1,1,1]];
        Assert::assertEquals(8, $gameOfLife->getLiveNeighbourCount($grid, 1, 1));


        $grid = [[0,0,0], [1,0,0], [0,1,1]];
        Assert::assertEquals(3, $gameOfLife->getLiveNeighbourCount($grid, 1, 1));
        Assert::assertEquals(1, $gameOfLife->getLiveNeighbourCount($grid, 0, 0));
    }


}