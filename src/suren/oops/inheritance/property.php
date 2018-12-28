<?php

namespace suren\oops\inheritance;

class ParentClass {

    public $name = 'ParentClass';
    public function getPropertyVal() {
        $childClass = new ChildClass();
        return $this->name;
    }
}

class ChildClass extends ParentClass {

    public function __construct() {
        $this->name = 'ChildClass';
    }
    public function getName() {
        return $this->name;
    }

}

$obj = new ParentClass();
echo $obj->getPropertyVal();

