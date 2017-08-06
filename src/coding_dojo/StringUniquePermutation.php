<?php
/**
 * Created by PhpStorm.
 * User: shuklas
 * Date: 5/8/15
 * Time: 2:26 PM
 */

namespace src\coding_dojo;

class StringUniquePermutation {

    private static $str;
    private static $permutationList;

    public function FindStringUniquePermutation($str) {
        self::$str = $str;
        self::$permutationList = array();

        self::getStringUniquePermutation(0, strlen($str)-1);
        self::$permutationList = array_unique(self::$permutationList);
        sort(self::$permutationList);

        return self::$permutationList;
    }

    public static function getStringUniquePermutation($start, $end) {

        if($start == $end) {
            self::$permutationList[] = self::$str;
        }
        for($counter=$start; $counter<=$end; $counter++) {
            self::swap($start, $counter);
            self::getStringUniquePermutation($start+1, $end);
            self::swap($counter, $start);
        }

    }

    public static function swap( $index1, $index2) {
        $tmp = self::$str[$index1];
        self::$str[$index1] = self::$str[$index2];
        self::$str[$index2] = $tmp;
    }

}

?>