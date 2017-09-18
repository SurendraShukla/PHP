<?php

namespace suren\oops;

class ParentClass {
    // Redefine the parent method
    function displayVar() {
        echo "Parent class\n";
    }
}

class ChildClass extends ParentStaticClass
{
    // Redefine the parent method
    function displayVar() {
        echo "Extending class\n";
        ParentStaticClass::displayVar();
    }


}

$extended = new Child();
$extended->displayVar();


