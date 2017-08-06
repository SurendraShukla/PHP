<?php

class PascalTriangle {

    private $pascalTriangleRows = array();

    public function getPascalTriangle($rowNo) {

        for ($row = 0; $row <= $rowNo; $row++) {

            $this->_setCharInCurrentRow($row, 1);
            for ($column = 0; $column < $this->_getPreviousRowLength($row); $column++) {
                $this->_setCharInCurrentRow($row, $this->_getChar($row, $column));
            }
        }

        return $this->pascalTriangleRows;
    }

    private function _getPreviousRowLength($row) {
        return isset($this->pascalTriangleRows[$row-1]) ? count($this->pascalTriangleRows[$row-1]) : 0;
    }

    private function _getPreviousRowsNextColumnValue($row, $column) {
        return isset($this->pascalTriangleRows[$row-1][$column + 1]) ? $this->pascalTriangleRows[$row-1][$column + 1] : 0;
    }

    private function _getPreviousRowsCurrentColumnValue($row, $column) {
        return $this->pascalTriangleRows[$row-1][$column];
    }

    private function _setCharInCurrentRow($row, $char){
        $this->pascalTriangleRows[$row][] = $char;
    }

    public function _getChar($row, $column) {
        return $this->_getPreviousRowsCurrentColumnValue($row, $column) + $this->_getPreviousRowsNextColumnValue($row, $column);
    }
}