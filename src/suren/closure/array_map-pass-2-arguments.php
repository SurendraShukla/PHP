<?php

function filterAndSquare($val, $filter_array) {
    if ( !in_array($val, $filter_array ) ) {
        return $val*$val;
    }
    return $val;
}

$filterList = [1, 2, 3, 4];
$output = array_map(function($val) use ($filterList) {
    return filterAndSquare($val, $filterList);
}, [1, 2, 3, 4, 5, 6, 7, 8]);


print_r($output);

