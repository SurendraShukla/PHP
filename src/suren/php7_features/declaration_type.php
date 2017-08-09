<?php
//declare(strict_types=1);

//
// Coercive mode without strict
//

/*
 * Scalar type declarations
 */
function sumOfInts(int ...$ints) {
    return array_sum($ints);
}

/*
 * Return type declarations
 * argument type declarations
 */
function arraysSum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}


//print_r(sumOfInts(2, '3', 4.1));
//print_r(arraysSum([2, 3, 4.1]));
