<?php

namespace src\suren\oops;


class ParentClass
{

    function className(){
        return __CLASS__;
    }

    function selfName(){
        return self::className();
    }

    function staticName(){
        return static::className();
    }

}

class ChildClass extends ParentClass
{
    function className(){
        return __CLASS__;
    }

}

$obj = new ChildClass();
echo "\n".$obj->selfName();
echo "\n".$obj->staticName();
