<?php

namespace src\suren\oops\oops;

include 'global.php';


use function src\suren\oops\printCity;

class GlobalClass {

    public function useGlobalFun() {
        printName();
//        printCity();
    }

}


$obj = new GlobalClass();
//echo "\n";
//print_r($obj);
//echo "\n";
$obj->useGlobalFun();

