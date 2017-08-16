<?php

class A {
    private $a=10;
    function __construct() {
        echo "\nA constructor";
    }

    function printProperty() {
        echo $this->a;
    }

}

Class B {
    private $b=20;

    function B() {
        echo "\nB constructor";
        return new A();
    }

//    function __construct() {
//        echo "\nB __constructor";
//        return new A();
//    }

    function echoProperty() {
        echo $this->b;
    }
}

$me = new B();
print_r($me);
$me->echoProperty();

