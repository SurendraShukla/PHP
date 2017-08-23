<?php

namespace suren\oops\final_example;

class FinalMethodParentClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

class FinalMethodChildClass extends FinalMethodParentClass {
    public function moreTesting() {
        echo "ChildClass::moreTesting() called\n";
    }
}
// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
