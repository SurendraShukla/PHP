<?php
/**
 * Created by PhpStorm.
 * User: shuklas
 * Date: 5/19/15
 * Time: 11:59 PM
 */
//
//fscanf(STDIN, "%s\n", $numberOfTestCases);
//while($numberOfTestCases==0) {
//    echo "Number Of Test Cases: ".$numberOfTestCases;
//    fscanf(STDIN, "%s\n", $patternString);
//    fscanf(STDIN, "%s\n", $finalString);
//
//    echo "Pattern string: ".$patternString;
//    echo "Final string: ".$finalString;
//    $numberOfTestCases--;
//}
//
//exit;
//$arg
//$pattern = 'wcyuogmlrdfphitxjakqvzbnes';
//$string = 'jcdokai';

//echo "[".(ord('s')-ord('a'))."]";
//exit;

$pattern = 'miruqopsxthzdcnvkfbglwayje';
$string = 'wgfsyvno';

$patternArray = array();
for($counter=0;$counter<strlen($pattern);$counter++) {
    $char   = $pattern[$counter];
    $patternArray[$char] = $counter;
}


$arrayToSort = array();
for($counter=0;$counter<strlen($string);$counter++) {
    $char   = $string[$counter];
    $key    = $patternArray[$char];
    $arrayToSort[$key] = $char;
}
ksort($arrayToSort);
