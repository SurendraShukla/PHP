<?php

namespace suren\oops\object_passing;

class A {
    public $foo = 1;
}

$a = new A;
$b = $a;
$a->foo = 2;
$a = NULL;
echo $b->foo."\n"; // 2

$c = new A;
$d = &$c;
$c->foo = 2;
$c = NULL;
echo $d->foo."\n"; // Notice:  Trying to get property of non-object...
