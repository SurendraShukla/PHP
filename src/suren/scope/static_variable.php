<?php
function test()
{
    static $a = 0;
    echo $a;
    $a++;
    unset($a);
}

test();
test();
test();
