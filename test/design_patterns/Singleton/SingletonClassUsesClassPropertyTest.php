<?php

namespace design_patterns\Singleton;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class SingletonClassUsesClassPropertyTest extends TestCase
{
    public function test()
    {
        //
        //Testing some calls to that class
        $obj1 = SingletonClassUsesClassProperty::getInstance();
        $obj2 = SingletonClassUsesClassProperty::getInstance();
        $obj1->logAndPrintMessage();
        $obj2->logAndPrintMessage();
        //$obj3->logAndPrintMessage();

        Assert::assertTrue(true);

    }
}