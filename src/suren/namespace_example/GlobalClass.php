<?php

namespace suren\namespace_example;

include 'global.php';


use function src\suren\namespace_example\printCity;

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

