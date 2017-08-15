<?php
/**
 * Created by PhpStorm.
 * User: shuklas
 * Date: 5/14/15
 * Time: 2:26 PM
 */

class ModifiedBubbleSort {

    public static function sort($arr) {

        $arrLen = count($arr);
        $isArraySorted = true;

        for ($outer = 0; $outer < $arrLen; $outer++) {
            for ($inner = $outer+1; $inner < $arrLen; $inner++) {
                if($arr[$outer] > $arr[$inner]) {
                    $isArraySorted = false;
                    $arr = self::swap($outer, $inner, $arr);
                }
            }
            if($isArraySorted) {
                return $arr;
            }
        }

        return $arr;

    }

    public static function swap($index1, $index2, $arr) {
        $tmp = $arr[$index1];
        $arr[$index1] = $arr[$index2];
        $arr[$index2] = $tmp;
        return $arr;
    }

}