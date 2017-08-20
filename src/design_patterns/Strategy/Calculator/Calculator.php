<?php

namespace src\suren\design_patterns\Strategy;

//$currentDir = dirname(dirname(__FILE__));
//
///** @var \Composer\Autoload\ClassLoader $loader */
//require $currentDir.'/../../vendor/autoload.php';

use src\suren\design_patterns\Strategy\behaviour\MultiplyOperator;
use src\suren\design_patterns\Strategy\behaviour\Operator;
use src\suren\design_patterns\Strategy\behaviour\RestOperator;
use src\suren\design_patterns\Strategy\behaviour\SumOperator;

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
//
//$cal = new Calculator(20, 10);
//
//$sum = new SumOperator();
//echo $cal->operate($sum);
//
//$rest = new RestOperator();
//echo $cal->operate($rest);
//
//$mult = new MultiplyOperator();
//echo $cal->operate($mult);
//
