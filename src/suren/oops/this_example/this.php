<?php

namespace suren\oops\this_example;

class A {
    function fun() {
        print_r($this);
    }
}

(new A())->fun();