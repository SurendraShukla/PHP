<?php
$name = 'Suren';

function printName() {
    global $name;
    echo "Hello " . $name;
}



/*class GlobalClass {

    public function useGlobalFun() {
        printName();
    }

}


$obj = new GlobalClass();
//echo "\n";
//print_r($obj);
//echo "\n";
$obj->useGlobalFun();
*/

/*
namespace src\suren\namespace_example;
$cityName = 'Pune';

function printCity() {
    global $cityName;
    echo "From " . $cityName;
}*/


