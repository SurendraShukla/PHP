<?php

class Util {
    public static function printer ($a, $b, $c ) {
        echo "\n".$a."=".$b."=".$c."\n";
    }
}


Util::printer(1, 2, 3);


$var1 = [Util::class, 'printer'];
$var1(1, 2, 3);


$var2 = 'util::printer';
$var2(1, 2, 3);

