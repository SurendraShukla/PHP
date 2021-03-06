<?php

namespace suren\php7_features;

class A {
    private $x = 1;
    private $y = 2;
}

$getX = function() {
    echo "\n".$this->x;
    echo "\n".$this->y;
};


// Pre PHP 7 code
$getXCB = $getX->bindTo(new A(), 'suren\php7_features\A'); // intermediate closure
$getXCB();

// PHP 7+ code
$getX->call(new A);

