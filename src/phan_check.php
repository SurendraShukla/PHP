<?php
interface T { }
interface X { }
class D implements T, X { }
class E implements T { }

class C {
    static function fn(T $arg) {
        if ($arg instanceof X) {
            C::fn3($arg);
            return;
        }
        C::fn2($arg);
    }
    static function fn2(T $arg) {
        echo "E";
    }
    static function fn3(T $arg) {
        echo "D";
    }
}

C::fn(new D);    // Outputs "D"
C::fn(new E);    // Outputs "E"

