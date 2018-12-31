<?php

namespace suren\oops\inheritance;

class ParentClass_Property {

    public $name = 'ParentClass';
    public function getPropertyVal() {
        $childClass = new ChildClass_Property();
        return $this->name;
    }
}

class ChildClass_Property extends ParentClass_Property {

    public function __construct() {
        $this->name = 'ChildClass';
    }
    public function getName() {
        return $this->name;
    }

}

$obj = new ParentClass_Property();
echo $obj->getPropertyVal();

