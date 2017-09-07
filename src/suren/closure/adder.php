<?php

function adder ($x) {
    return function ($y) use ($x) {
        return function ($z) use ($x, $y) {
            echo $x+$y+$z;
        };
    };
}

$incrementByOne = adder(1);
$incrementBy11 = $incrementByOne(10);
$incrementBy11(10);
$incrementBy11(20);
//echo "\n";
//$incrementByOne(20);
//echo "\n";
//adder(2)(10);


