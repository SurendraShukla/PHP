<?php

namespace suren\oops;


class ParentStaticClass
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

class ChildStaticClass extends ParentStaticClass
{
    function className(){
        return __CLASS__;
    }

}

$obj = new Child();
echo "\n".$obj->selfName();
echo "\n".$obj->staticName();
