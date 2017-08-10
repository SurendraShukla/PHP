<?php

$gen = (function() {
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;


/*
 * allows you to return another iterable structure that can itself be traversed
 *  — whether that is an array, an iterator, or another generator.
 * */
function gen1() {
    yield 1;
    yield 2;
    yield from gen2();
}

function gen2() {
    yield 3;
    yield 4;
}

foreach (gen1() as $val) {
    echo $val, PHP_EOL;
}

