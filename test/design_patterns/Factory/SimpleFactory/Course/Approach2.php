<?php

namespace design_patterns\Factory\SimpleFactory\Course;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class Approach2 extends TestCase
{
    public function test()
    {
        $objCourse = CourseFactory::createCourse("J");
        Assert::assertTrue(true);
    }
}
