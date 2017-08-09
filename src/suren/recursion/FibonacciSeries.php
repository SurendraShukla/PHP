<?php

function populateFibonacciSeries($no) {

    if ($no <= 1) return [1,1];

    $fibonacciSeriesArr = populateFibonacciSeries($no-1);
    array_push($fibonacciSeriesArr, ($fibonacciSeriesArr[$no-1]+$fibonacciSeriesArr[$no-2]));

    return $fibonacciSeriesArr;

}

print_r(populateFibonacciSeries(255));


