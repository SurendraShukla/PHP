<?php

namespace src\suren\php7_features;

// Pre PHP 7 code
use src\suren\php7_features\TestA;
use src\suren\php7_features\TestB;
use src\suren\php7_features\TestC as C;

use function src\suren\php7_features\fun_a;
use function src\suren\php7_features\fun_b;
use function src\suren\php7_features\fun_c;

use const src\suren\php7_features\ConstA;
use const src\suren\php7_features\ConstB;
use const src\suren\php7_features\ConstC;


// PHP 7+ code
use src\suren\php7_features\{ClassA, ClassB, ClassC as Cnew};
use function src\suren\php7_features\{fn_a, fn_b, fn_c};
//use const src\suren\php7_features\{ConstA, ConstB, ConstC};

//
//
//class TestA{ }
//class TestB{ }
//class TestC{ }
//
//function fun_a() {}
//function fun_b() {}
//function fun_c() {}
//
//define("ConstA", "wow");
//define("ConstB", "cool");
//define("ConstC", "awesome");