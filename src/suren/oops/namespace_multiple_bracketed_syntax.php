<?php
// You cannot mix bracketed namespace declarations with unbracketed namespace declarations - will result in a Fatal error
namespace {
    $name = 'Suren';

    function printName()
    {
        global $name;
        echo "Hello " . $name;
    }
}

namespace src\suren\oops\tmp2 {

    $cityName = 'Pune';

    function printCity() {
        global $cityName;
        echo "From " . $cityName;
    }
}


