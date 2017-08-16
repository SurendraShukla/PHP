<?php
/*
 * Property and function name same
 * Property as a function
 */
class Foo {
    public $bar = 'property';
    public $method;

    /**
     * Foo constructor.
     */
    public function __construct() {
        $this->method = function() {
            return 42;
        };
    }


    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;

// PHP5.3.0
$func = $obj->method;
echo $func(), PHP_EOL;

// PHP7.0.0
echo ($obj->method)();
