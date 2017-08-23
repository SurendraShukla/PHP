<?php

namespace suren\oops\final_example;

final class FinalClassParent {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    // Here it doesn't matter if you specify the function as final or not
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

//class FinalClassChild extends FinalClassParent {
//}
// Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)

