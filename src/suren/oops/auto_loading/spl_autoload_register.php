<?php
spl_autoload_register(function ($class_name) {
    include $class_name . 'test.php';
});

$obj  = new class{public $a=10;};
$obj2 = new class{public $b=10;};

var_dump($obj);
var_dump($obj2);
