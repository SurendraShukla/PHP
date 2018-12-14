<?php

namespace phan;
/*
 * Changing signature of overrideMethod from private to protected gives different result
 *
 * a child class had a `public` method that was trying to overwrite its parent class’ `private` method,
 * which led to the parent class’ method being executed instead of the child class’ method.
 * Making those parent class methods `protected` works
 */
class ParentClass {

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

class ChildClass extends ParentClass {

    private $c;
    public $d;


    public function overrideMethod() {
        echo "\n\nChild class override method\n\n";
    }

    public function methodCallFromChild() {
        return $this->overrideMethodCallFromParent();
    }

}

$obj = new ChildClass();
$obj->methodCallFromChild();


function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

$generator = gen_one_to_three();
$generator->next();
print_r($generator);
echo "Surendra";

