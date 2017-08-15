<?php

$name = 'Hi';

function printName() {
    global $name;
    echo "Hello ".$name;
}

echo printName();
