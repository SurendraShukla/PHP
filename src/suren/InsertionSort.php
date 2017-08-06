<?php
/**
 * Created by PhpStorm.
 * User: shuklas
 * Date: 5/14/15
 * Time: 2:26 PM
 */

class InsertionSort {

    public static function sort($arr) {

        $arrLen = count($arr);

        for ($counter = 1; $counter < $arrLen; $counter++) {

            $number  = $arr[$counter];
            $tmpCounter = $counter;

            while ( ($tmpCounter >= 0) && (isset($arr[$tmpCounter-1])) && ($number < $arr[$tmpCounter-1])) {
                $arr[$tmpCounter] = $arr[$tmpCounter-1];
                $tmpCounter--;
            }

            $arr[$tmpCounter] = $number;

        }

        return $arr;

    }

}