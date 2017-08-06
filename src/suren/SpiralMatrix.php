<?php
/**
 * Created by PhpStorm.
 * User: shuklas
 * Date: 5/16/15
 * Time: 12:34 AM
 */

class SpiralMatrix{

    CONST ROW = 'ROW';
    CONST COL = 'COLUMN';
    CONST INCREMENT_BY_ONE = '+1';
    CONST DECREMENT_BY_ONE = '-1';

    private $matrix = array(),
        $minCol, $maxCol,
        $minRow, $maxRow,
        $maxValLen, $matrixValues='';

    public function __construct($matrix) {
        $this->matrix = $matrix;
        $this->minCol = 0;
        $this->minRow = 0;
        $this->maxCol = count($matrix[0]);
        $this->maxRow = count($matrix);

        $this->maxValLen = $this->maxCol*$this->maxRow;

        $this->maxCol--;
        $this->maxRow--;
    }

    public function getMatrixSpiralValues() {

        if($this->_isMatrixSingleDimensionalArray()) {
            for($counter=0; $counter<=$this->maxRow; $counter++) {
                $this->_populateMatrixValues($this->matrix[$counter]);
            }
            return $this->_getMatrixValues();
        }

        while(!$this->_isMatrixAllValuesObtained()) {

            /*
            $this->right($this->minRow, $this->minCol,  $this->maxCol);   // Increment
            $this->down($this->minRow+1,$this->maxCol,  $this->maxRow);   // Increment
            $this->left($this->maxRow,  $this->maxCol-1,$this->minCol);   // Decrement
            $this->up($this->maxRow-1,  $this->minCol,  $this->minRow+1); // Decrement
            */

            $this->_travers($this->minRow,   $this->minCol,  $this->maxCol,  self::COL, self::INCREMENT_BY_ONE);
            $this->_travers($this->minRow+1, $this->maxCol,  $this->maxRow,  self::ROW, self::INCREMENT_BY_ONE);
            $this->_travers($this->maxRow,   $this->maxCol-1,$this->minCol,  self::COL, self::DECREMENT_BY_ONE);
            $this->_travers($this->maxRow-1, $this->minCol,  $this->minRow+1,self::ROW, self::DECREMENT_BY_ONE);

            $this->maxRow--;
            $this->maxCol--;
            $this->minRow++;
            $this->minCol++;
        }

        return $this->_getMatrixValues();
    }


    private function _travers($row, $col, $terminateCondition, $entityType, $unaryOperand) {
        if( $this->_isMatrixAllValuesObtained() ) return;

        $initialVal = $this->_getInitialValueForIterator($row, $col, $entityType);

        for( $counter = $initialVal;
            ($this->_getTerminationConditionForIterator($terminateCondition, $unaryOperand, $counter));
            $counter+=$unaryOperand
        ) {
            $this->_populateMatrixValuesAsPerEntityType($row, $col, $entityType, $counter);
            $this->_decrementMaxValLen();
        }
    }

    /*
    public function right($row, $col, $maxCol) {
        if( $this->_isMatrixAllValuesObtained() ) return;

        for($counter=$col; $counter<=$maxCol; $counter++) {
            $this->_populateMatrixValues($this->matrix[$row][$counter]);
            $this->_decrementMaxValLen();
        }
    }

    public function down($row, $col, $maxRow) {
        if( $this->_isMatrixAllValuesObtained() ) return;

        for($counter=$row; $counter<=$maxRow; $counter++) {
            $this->_populateMatrixValues($this->matrix[$counter][$col]);
            $this->_decrementMaxValLen();
        }
    }

    public function left($row, $col, $minCol) {
        if( $this->_isMatrixAllValuesObtained() ) return;

        for($counter=$col; $counter>=$minCol; $counter--) {
            $this->_populateMatrixValues($this->matrix[$row][$counter]);
            $this->_decrementMaxValLen();
        }
    }

    public function up($row, $col, $minRow) {
        if( $this->_isMatrixAllValuesObtained() ) return;

        for($counter=$row; $counter>=$minRow; $counter--) {
            $this->_populateMatrixValues($this->matrix[$counter][$col]);
            $this->_decrementMaxValLen();
        }
    }
    */

    private function _getMatrixValues(){
        return $this->matrixValues;
    }

    private function _populateMatrixValues($val) {
        $this->matrixValues.=$val." ";
    }

    private function _decrementMaxValLen() {
        $this->maxValLen--;
    }

    private function _isMatrixAllValuesObtained() {
        return ($this->maxValLen>0 ) ? false : true;
    }

    /**
     * @return bool
     */
    private function _isMatrixSingleDimensionalArray() {
        return !is_array($this->matrix[0]);
    }

    /**
     * @param $row
     * @param $col
     * @param $entityType
     * @return mixed
     */
    private function _getInitialValueForIterator($row, $col, $entityType) {
        return (self::COL == $entityType) ? $col : $row;
    }

    /**
     * @param $terminateCondition
     * @param $unaryOperand
     * @param $counter
     * @return bool
     */
    private function _getTerminationConditionForIterator($terminateCondition, $unaryOperand, $counter) {
        return ($unaryOperand == self::INCREMENT_BY_ONE) ? $counter <= $terminateCondition : $counter >= $terminateCondition;
    }

    /**
     * @param $row
     * @param $col
     * @param $entityType
     * @param $counter
     */
    private function _populateMatrixValuesAsPerEntityType($row, $col, $entityType, $counter) {
        if (self::COL == $entityType) {
            $this->_populateMatrixValues($this->matrix[$row][$counter]);
        } else {
            $this->_populateMatrixValues($this->matrix[$counter][$col]);
        }
    }
}