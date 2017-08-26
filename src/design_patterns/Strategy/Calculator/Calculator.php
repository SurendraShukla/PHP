<?php

namespace design_patterns\Strategy;


use design_patterns\Strategy\behaviour\Operator;
use design_patterns\Strategy\behaviour\MultiplyOperator;
use design_patterns\Strategy\behaviour\RestOperator;
use design_patterns\Strategy\behaviour\SumOperator;

class Calculator {

    private $_val1;
    private $_val2;

    /**
     * Calculator constructor.
     * @param int $val1
     * @param int $val2
     */
    public function __construct(int $val1, int $val2) {
        $this->_val1 = $val1;
        $this->_val2 = $val2;
    }

    public function operate(Operator $operator) {
        return $operator->execute($this->_val1, $this->_val2);
    }

}
