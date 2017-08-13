<?php

$max = 100;

/*print_r(range(1, $max));
function rangeFun() {
    global $max;
    $returnArr = [];
    for ($i=0; $i<$max; $i++) {
        array_push($returnArr, $i);
    }
    return $returnArr;
}
rangeFun();*/


function rangeYield() {
    global $max;
    for ($i=0; $i<$max; $i++) {
        yield $i;
    }
}

foreach(rangeYield() as $post)
    echo "\n".$post;

