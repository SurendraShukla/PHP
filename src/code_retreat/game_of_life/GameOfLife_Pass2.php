<?php

namespace code_retreat\game_of_life;


class GameOfLife_Pass2 {

    public function isAlive(int $aliveNeighbours) {
        return ( $aliveNeighbours == 2 || $aliveNeighbours == 3) ? true : false;
    }

    public function isResurrected(int $aliveNeighbours) {
        return ( $aliveNeighbours == 3 ) ? true : false;
    }

    public function getNextGeneration($currentGeneration)
    {
        $nextGeneration = [];
        $rowLen = count($currentGeneration);
        for( $row=0; $row<$rowLen; $row++ ) {

            $colLen = count($currentGeneration[$row]);
            for( $col=0; $col<$colLen; $col++ ) {
                echo "[".$this->getNumberOfAliveNeighbours($currentGeneration, $row, $col)."]";
            }
        }
    }

    private function getNumberOfAliveNeighbours($currentGeneration, $rowIndex, $colIndex) {

        $liveCellCounts = 0;

        $rowLen = count($currentGeneration);
        $colLen = count($currentGeneration[0]);

        $rowStart = (($rowIndex-1) < 0) ? 0 : ($rowIndex-1);
        $rowEnd = (($rowIndex+1) > $rowLen) ? $rowLen : ($rowIndex+1);

        $colStart = (($colIndex-1) < 0) ? 0 : ($colIndex-1);
        $colEnd = (($colIndex+1) > $colLen) ? $colLen : ($colIndex+1);

        for($row=$rowStart; $row<$rowEnd; $row++ ) {
            for($col=$colStart; $col<$colEnd; $col++ ) {
                if ( ($row == $rowIndex) && ($col == $colIndex) ) {
                    continue;
                }

                if($currentGeneration[$row][$col] == 1) {
                    $liveCellCounts++;
                }

            }
        }

        return $liveCellCounts;
    }

}