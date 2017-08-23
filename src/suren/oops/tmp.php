<?php

namespace suren\oops;

//class StaticVsNonstatic {
//
//    const       STAT = 'S' ; // no dollar sign for constants (they are always static)
//    static     $stat = 'Static' ;
//    public     $publ = 'Public' ;
//    private    $priv = 'Private' ;
//    protected  $prot = 'Protected' ;
//
//    function __construct( ){  }
//
//
//    public function showMe( ){
//        print "\n self::STAT:"  . self::STAT; // refer to a (static) constant like this
//        print "\n self::\$stat:" . self::$stat; // static variable
//        print "\n $this->stat:" . $this->stat; // legal, but not what you might think: empty result
//        print "\n $this->publ:" . $this->publ; // refer to an object variable like this
//        print "\n ";
//    }
//}
//$obj = new StaticVsNonstatic();
//$obj->showMe();
//
//

class A {
    private function foo() {
        echo "success!\n";
    }
    public function test() {
        $this->foo();
        static::foo();
    }
}

class B extends A {
    /* foo() will be copied to B, hence its scope will still be A and
     * the call be successful */
}

class C extends A {
    private function foo() {
        /* original method is replaced; the scope of the new one is C */
    }
}

$b = new B();
$b->test();
$c = new C();
//$c->test();   //fails


