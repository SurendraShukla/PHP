<?php
class ParentClass {
    // Redefine the parent method
    function displayVar() {
        echo "Parent class\n";
    }
}

class ChildClass extends ParentClass
{
    // Redefine the parent method
    function displayVar() {
        echo "Extending class\n";
        ParentClass::displayVar();
    }


}

$extended = new ChildClass();
$extended->displayVar();


