<?php
$a = 10;
$obj = new stdClass();
$obj->name = 'Surendra';

$func  = function($b) use ($a, $obj){
    echo "\n".$b."=".$a."=".$obj->name."\n";
};


$func(1);

$a = 20;
$obj->name = 'Shukla';

$func(10);

