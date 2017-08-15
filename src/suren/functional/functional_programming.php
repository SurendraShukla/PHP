<?php
// Functions are first class citizen in PHP
// 1. Function is stored in variable/data structure
// 2. Function can be passed to function
// 3. Function can be returned from function
$fun = function ($a, $b) {echo $a + $b;};
$fun(10, 20);

function functionReturningFunction ($salutation) {
    return function ($name) use ($salutation) {
        echo "\n".$salutation.'! '.$name;
    };
}
functionReturningFunction('Hi')('Suren');

function functionAcceptingFunction($fun) {
    $fun();
}
functionAcceptingFunction(function (){echo "\nHello!!! Surendra";});

