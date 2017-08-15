<?php

function adder ($x) {
    return function ($y) use ($x) {
        echo $x+$y;
    };
}

$incrementByOne = adder(1);
$incrementByOne(10);
echo "\n";
$incrementByOne(20);
echo "\n";
adder(2)(10);


