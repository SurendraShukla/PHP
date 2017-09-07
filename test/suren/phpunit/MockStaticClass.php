<?php

namespace test\suren;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class Logger
{
    public static function debug($msg)
    {
        echo "\nDebugging: $msg";
    }

    public static function warn($msg)
    {
        echo "\nwarn: $msg";
    }

    public static function error($msg)
    {
        echo "\nerror: $msg";
    }
}

class TestMe
{
    public static function TestThis()
    {
        Logger::debug('TestThis() called');
        echo "\nInside TestThis";
    }
}

class MockStaticClass extends TestCase
{
    /**
     * @test
     */
    public function mockStatic()
    {
        TestMe::TestThis();
        Assert::assertTrue(true);
    }

}