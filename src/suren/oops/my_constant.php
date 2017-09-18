<?php

namespace suren\oops;

const ONE = 1;
class MyConstant {
    const CONSTANT = 'constant value';
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = 'The value of THREE is '.self::THREE;

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

echo MyConstant::CONSTANT . "\n";
echo MyConstant::SENTENCE . "\n";

$class = new MyConstant();
$class->showConstant();

echo $class::CONSTANT."\n"; // As of PHP 5.3.0