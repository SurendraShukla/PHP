<?php
/*
 * First, think of variables in PHP as data slots. Each one is a name that points to a data slot that can hold a value that is one of the basic data types: a number, a string, a boolean, etc. When you create a reference, you are making a second name that points at the same data slot. When you assign one variable to another, you are copying the contents of one data slot to another data slot.

Now, the trick is that object instances are not like the basic data types. They cannot be held in the data slots directly. Instead, an object's "handle" goes in the data slot. This is an identifier that points at one particular instance of an obect. So, the object handle, although not directly visible to the programmer, is one of the basic datatypes.

What makes this tricky is that when you take a variable which holds an object handle, and you assign it to another variable, that other variable gets a copy of the same object handle. This means that both variables can change the state of the same object instance. But they are not references, so if one of the variables is assigned a new value, it does not affect the other variable.
 */

// Assignment of an object
Class Object{
    var $foo="bar";
};

$objectVar = new Object();
$reference =& $objectVar;
$assignment = $objectVar;

//
// $objectVar --->+---------+
//                |(handle1)----+
// $reference --->+---------+   |
//                              |
//                +---------+   |
// $assignment -->|(handle1)----+
//                +---------+   |
//                              |
//                              v
//                  Object(1):foo="bar"
//

/*
 * $assignment has a different data slot from $objectVar, but its data slot holds a handle to the same object. This makes it behave in some ways like a reference. If you use the variable $objectVar to change the state of the Object instance, those changes also show up under $assignment, because it is pointing at that same Object instance.
 */
$objectVar->foo = "qux";
print_r( $objectVar );
print_r( $reference );
print_r( $assignment );

//
// $objectVar --->+---------+
//                |(handle1)----+
// $reference --->+---------+   |
//                              |
//                +---------+   |
// $assignment -->|(handle1)----+
//                +---------+   |
//                              |
//                              v
//                  Object(1):foo="qux"
//

/*
 * But it is not exactly the same as a reference. If you null out $objectVar, you replace the handle in its data slot with NULL. This means that $reference, which points at the same data slot, will also be NULL. But $assignment, which is a different data slot, will still hold its copy of the handle to the Object instance, so it will not be NULL.
 */
$objectVar = null;
print_r($objectVar);
print_r($reference);
print_r($assignment);

//
// $objectVar --->+---------+
//                |  NULL   |
// $reference --->+---------+
//
//                +---------+
// $assignment -->|(handle1)----+
//                +---------+   |
//                              |
//                              v
//                  Object(1):foo="qux"