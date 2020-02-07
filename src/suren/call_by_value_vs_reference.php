<?php
// Java, JS, Python, Ruby, C#, C++ - Supports
function callByValue_PrimitiveDataType($primitiveDataType) {
    $primitiveDataType = 20;
}

// Java, JS, Python, Ruby, C#, C++ - Supports
function callByReference_ObjectSharing($objectSharing) {
    $objectSharing->b = 20;
}

// Java, JS - Doesn't support
function callByReference_ObjectChange(&$objChange) {
    $obj = new stdClass();
    $obj->c = 30;
    $objChange = $obj;
}
$a = 10;
callByValue_PrimitiveDataType($a);
echo "[$a]\n";

$obj1 = new stdClass();
$obj1->a = 10;
callByReference_ObjectSharing($obj1);
print_r($obj1);

$obj2 = new stdClass();
$obj2->a = 10;
callByReference_ObjectChange($obj2);
print_r($obj2);
