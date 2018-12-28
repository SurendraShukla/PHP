<?php

function getLongestSubArrayWithAverageGreaterThanAverageGiven($array, $arrayAverage) {
    $len = count($array);
    for($outerCounter=0; $outerCounter<$len; $outerCounter++) {
        $total = 0;
        $totalElements = 0;
        for($innerCounter = $outerCounter; $innerCounter < $len; $innerCounter++) {
            $total+=$array[$innerCounter];
            $totalElements++;
        }

        $currentAverage = $total/$totalElements;
        if($currentAverage >= $arrayAverage) {
            break;
        }
    }
    return array_slice($array, $outerCounter, $len);
}

$array = [-2, -1, 1, 2, 3, 4, 6];
$arrayAverage = 6;

print_r(getLongestSubArrayWithAverageGreaterThanAverageGiven($array, $arrayAverage));

?>
