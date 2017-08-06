<?php

/**
 * Class SwapNumbers
 * -- Swap 2 Variables without using any temporary variable
 */

class SwapNumbers {

    public static function swapNumberUsingArithmeticOperators($no1, $no2) {
        $no1 = $no1+$no2;
        $no2 = $no1-$no2;
        $no1 = $no1-$no2;
        return array($no1, $no2);
    }

    public static function swapNumbersUsingBitwiseXOR($no1, $no2) {
        $no1 = $no1^$no2;
        $no2 = $no1^$no2;
        $no1 = $no1^$no2;
        return array($no1, $no2);
    }
    
}