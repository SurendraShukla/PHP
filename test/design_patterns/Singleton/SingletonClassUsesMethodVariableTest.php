<?php

namespace design_patterns\Singleton;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class SingletonClassUsesMethodVariableTest extends TestCase
{
    public function test()
    {

        $instance1 = SingletonClassUsesMethodVariable::Instance();
        $instance2 = SingletonClassUsesMethodVariable::Instance();

        Assert::assertEquals($instance1, $instance2);
        //$fact = new SingletonClassUsesMethodVariable();
    }

}