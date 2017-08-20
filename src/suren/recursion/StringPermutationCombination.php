<?php

$str = 'abcd';

getStringUniquePermutation(0, (strlen($str)-1) );


function getStringUniquePermutation($start, $end) {

    if($start == $end) {
        global $str;
        echo $str."\n";
        return;
    }

    for($counter=$start; $counter<=$end; $counter++) {
        swap($start, $counter);
        getStringUniquePermutation(($start+1), $end);
        swap($counter, $start);
    }

}

function swap($index1, $index2) {
    global $str;
    $tmp = $str[$index1];
    $str[$index1] = $str[$index2];
    $str[$index2] = $tmp;
}

?>