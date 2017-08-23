<?php
namespace suren\oops\tmp1;
$name = 'Suren';

function printName() {
    global $name;
    echo "Hello " . $name;
}

namespace suren\namespace_example\tmp2;
$cityName = 'Pune';

function printCity() {
    global $cityName;
    echo "From " . $cityName;
}


