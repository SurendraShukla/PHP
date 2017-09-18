<?php

namespace code_retreat\game_of_life;
"use strict";

class GameOfLife_Pass1
{

    private $arr;

    /**
     * GameOfLife constructor.
     */
    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }

    public function getStateOfTheCell(int $row, int $col)
    {
        if( count($this->arr) == 0)
            return null;

//        echo count($this->arr);
//        echo count($this->arr[0]);
        print_r($this->arr);
        return ($this->getNeighbourCellAliveCount($row, $col) > 2) ?  true : false;

    }

    public function getNeighbourCellAliveCount(int $rowIndex, int $colIndex) : int
    {
        $liveCellCounts = 0;
        $rowStart = (($rowIndex-1) < 0) ? 0 : ($rowIndex-1);
        $colStart = (($colIndex-1) < 0) ? 0 : ($colIndex-1);

        $rowLen = count($this->arr);
        $colLen = count($this->arr[0]);

        $rowEnd = (($rowIndex+1) > $rowLen) ? $rowLen : ($rowIndex+1);
        $colEnd = (($colIndex+1) > $colLen) ? $colLen : ($colIndex+1);

        for($row=$rowStart; $row<$rowEnd; $row++ ) {
            for($col=$colStart; $col<$colEnd; $col++ ) {
                if ( ($row == $rowIndex) && ($col == $colIndex) ) {
                    continue;
                }

                if($this->arr[$row][$col] == 1) {
                    $liveCellCounts++;
                }

            }
        }

        return $liveCellCounts;

    }
}