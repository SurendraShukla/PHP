<?php

namespace src\suren\oops\visibility;

class ConstantClassParent
{
    // Declare a public constant
//    public const MY_PUBLIC = 'public';

    // Declare a protected constant
//    protected const MY_PROTECTED = 'protected';

    // Declare a private constant
//    private const MY_PRIVATE = 'private';

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}

$myclass = new ConstantClassParent();
ConstantClassParent::MY_PUBLIC; // Works
ConstantClassParent::MY_PROTECTED; // Fatal Error
ConstantClassParent::MY_PRIVATE; // Fatal Error
$myclass->foo(); // Public, Protected and Private work


/**
 * Define MyClass2
 */
class ConstantClassChild extends ConstantClassParent
{
    // This is public
    function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE; // Fatal Error
    }
}

$myclass2 = new ConstantClassChild;
echo ConstantClassChild::MY_PUBLIC; // Works
$myclass2->foo2(); // Public and Protected work, not Private