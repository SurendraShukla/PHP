<?php

class StaticVsNonstatic {

    static $static      = 'Static Property';
    public $nonStatic   = 'NonStatic Property' ;

    public static function staticMethod() {
        print "\nself::\$static:=>" . self::$static;
//        print "\nself::\$nonStatic:=>" . self::$nonStatic;

//        print "\n\$this->\$static:=>" . $this->static;
//        print "\n\$this->\$nonStatic:=>" . $this->nonStatic;
    }

    public function nonStaticMethod( ) {
        print "\nself::\$static:=>" . self::$static;
//        print "\nself::\$nonStatic:=>" . self::$nonStatic; // Fatal error: Uncaught Error: Access to undeclared static property:

//        print "\n\$this->\$static:=>" . $this->static;
        print "\n\$this->\$nonStatic:=>" . $this->nonStatic;
    }
}

echo StaticVsNonstatic::$static;
/*echo StaticVsNonstatic::$nonStatic;
StaticVsNonstatic::staticMethod();
StaticVsNonstatic::nonStaticMethod();*/


//$obj = new StaticVsNonstatic();
//echo $obj->nonStatic;
//$obj->nonStaticMethod();

//echo $obj->static;
//$obj->staticMethod();
