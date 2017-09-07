<?php
class A {
    function fun() {
        print_r($this);
    }
}

(new A())->fun();