<?php

namespace design_patterns\singleton;

class SingletonClassUsesClassProperty
{
    ///Condition 1 - Presence of a static member variable
    private static $_instance = null;

    ///Condition 2 - Locked down the constructor
    private function __construct()
    {
    } //Prevent any oustide instantiation of this class

    ///Condition 3 - Prevent any object or instance of that class to be cloned
    private function __clone()
    {
    } //Prevent any copy of this object

    ///Condition 4 - Have a single globally accessible static method
    public static function getInstance()
    {
        if (!is_object(self::$_instance))  //or if( is_null(self::$_instance) ) or if( self::$_instance == null )
        {
            self::$_instance = new SingletonClassUsesClassProperty();
        }
        return self::$_instance;
    }

    ///Now we are all done, we can now proceed to have any other method logic we want

    //a simple method to echo something
    public function logAndPrintMessage()
    {
        file_put_contents('tmp.txt', date('Y-m-d h:m:s')."\n", FILE_APPEND);
        echo 'Event executed at '.date('Y-m-d h:m:s');
    }

}//END Class
//
/////Testing some calls to that class
$obj1 = SingletonClassUsesClassProperty::getInstance();
//$obj2 = SingletonClassUsesClassProperty::getInstance();
//$obj3 = SingletonClassUsesClassProperty::getInstance();
//
$obj1->logAndPrintMessage();
//$obj2->logAndPrintMessage();
//$obj3->logAndPrintMessage();

// http://7php.com/how-to-code-a-singleton-design-pattern-in-php-5/