<?php
$a = 1; /* global scope */

function test()
{
    global $a;
    echo $a; /* reference to local scope variable */
}

test();

