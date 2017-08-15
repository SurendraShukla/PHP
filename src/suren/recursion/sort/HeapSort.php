<?php
/**
 * Created by PhpStorm.
 * User: shuklas
 * Date: 5/14/15
 * Time: 2:26 PM
 */

class HeapSort {

    public static function sort($arr) {

        $arrLen = count($arr);

        for ($outer = 0; $outer < $arrLen; $outer++) {

            $min = $arr[$outer];

            for ($inner = $outer+1; $inner < $arrLen; $inner++) {
                if($arr[$inner] < $min) {
                    $min = $arr[$inner];
                    $arr = self::swap($outer, $inner, $arr);
                }
            }
        }

        return $arr;

    }

    public function swap($index1, $index2, $arr) {
        $tmp = $arr[$index1];
        $arr[$index1] = $arr[$index2];
        $arr[$index2] = $tmp;
        return $arr;
    }

}