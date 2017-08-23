<?php

namespace suren\oops\visibility;

class PropertyClassParent {
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello() {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new PropertyClassParent();
echo $obj->public; // Works
//echo $obj->protected; // Fatal Error
//echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private


/**
 * Define MyClass2
 */
class PropertyClassChild extends PropertyClassParent
{
    // We can redeclare the public and protected properties, but not private
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
//        echo $this->private;
    }
}

$obj2 = new PropertyClassChild();
echo $obj2->public; // Works
//echo $obj2->protected; // Fatal Error
//echo $obj2->private; // Undefined
$obj2->printHello(); // Shows Public2, Protected2, Undefined
