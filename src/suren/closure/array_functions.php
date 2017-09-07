<?php
/*
 * Double value of array/range
 */
$func = function($value) {
    return $value * 2;
};
print_r(array_map($func, range(1, 5)));


/*
 * Want to replace a string (:id) in all array-elements
 */
$hayStack = ["BookIterator :id","CarTypes :id","Cat :id"];

$replaced = array_map(function($element) use ($replace){
    return str_replace(":id",$replace,$element);
},$hayStack);

print_r($replaced);
