<?php

namespace design_patterns\Strategy;

//$currentDir = dirname(dirname(__FILE__));
//
///** @var \Composer\Autoload\ClassLoader $loader */
//require $currentDir.'/../../vendor/autoload.php';

use src\suren\design_patterns\Strategy\behaviour\Operator;
use src\suren\design_patterns\Strategy\behaviour\SumOperator;

class CalculatorNew {

    private $operator = [];

    public function addOperators(string $str, Operator $operator) {
        try{
            if (isset($this->operator[$str])) {
                throw new \Exception("Provided operator is already added. Try new one.");
            }
            $this->operator[$str] = $operator;
        }catch (\Exception $exception) {
            echo "\n".$exception->getMessage();
        }

    }

    public function operateOn(string $str, int $val1, $val2) {
        try{
            if (!isset($this->operator[$str])) {
                throw new \Exception("Provided operator is not found.");
            }
            return "\n".$this->operator[$str]->execute($val1, $val2);
        }catch (\Exception $exception) {
            echo "\n".$exception->getMessage();
        }
    }

}

$cal = new CalculatorNew();
echo $cal->operateOn('sum', 20, 10);
$cal->addOperators('sum', new SumOperator());
echo $cal->operateOn('sum', 20, 10);

$cal->addOperators('sum', new SumOperator());
echo $cal->operateOn('add', 20, 10);
