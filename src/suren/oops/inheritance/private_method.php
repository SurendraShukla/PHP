<?php

namespace suren\oops\inheritance;
/*
 * Changing signature of overrideMethod from private to protected gives different result
 *
 * a child class had a `public` method that was trying to overwrite its parent class’ `private` method,
 * which led to the parent class’ method being executed instead of the child class’ method.
 * Making this parent class method `protected` works
 */
class ParentClass_PrivateMethod {

    private $a;
    public $b;

    private function overrideMethod() {
        echo "\n\nParent class override method \n\n";
    }

    public function overrideMethodCallFromParent() {
        return $this->overrideMethod();
    }

    public function methodCallFromParent() {
        return $this->overrideMethodCallFromParent();
    }
}

class ChildClass_PrivateMethod extends ParentClass_PrivateMethod {

    private $c;
    public $d;

    public function overrideMethod() {
        echo "\n\nChild class override method\n\n";
    }

    public function methodCallFromChild() {
        return $this->overrideMethodCallFromParent();
    }

}

$obj = new ChildClass_PrivateMethod();
$obj->methodCallFromChild();


