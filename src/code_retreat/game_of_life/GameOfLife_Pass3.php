<?php

namespace code_retreat\game_of_life;


class GameOfLife_Pass3
{
    private $liveNeighboursCount;
    private $grid;

    public function getLiveNeighbourCount(array $grid, int $row, int $col)
    {
        $this->liveNeighboursCount = 0;
        $this->grid = $grid;

        $previousRow = $row-1;
        $nextRow = $row+1;

        if($previousRow >= 0) {
            $this->liveNeighboursCount+= $grid[$previousRow][$col-1] + $grid[$previousRow][$col] + $grid[$previousRow][$col+1];
        }
        $this->liveNeighboursCount+= $grid[$row][$col-1] + $grid[$row][$col+1];

        if($nextRow <= count($grid)) {
            $this->liveNeighboursCount+= $grid[$nextRow][$col-1] + $grid[$nextRow][$col] + $grid[$nextRow][$col+1];
        }

        return $this->liveNeighboursCount;
    }

    public function isValidCell($grid, $row, $col) {
        if( isset($grid[$row][$col]) ) {
            $this->liveNeighboursCount++;
        }
    }
}