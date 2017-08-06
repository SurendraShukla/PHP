<?php
/**
 * Created by PhpStorm.
 * User: shuklas
 * Date: 6/4/17
 * Time: 1:27 AM
 */

namespace test\suren;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class Annotations_Example_Test extends TestCase {

    /**
     * @test
     * @requires PHP 7.1
     */
    public function connection()
    {
        // Test requires the mysqli extension and PHP >= 5.3
        echo 'Demo_Annotations-connection';
        Assert::assertTrue(false);
    }
//
//    /**
//     * @test
//     * @small
//     */
//    public function small() {
//        echo 'Demo_Annotations-small';
//        sleep(1);
//        Assert::assertTrue(true);
//    }


    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected) {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider() {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }


    public function testOne() {
        echo 'testOne';
        $this->assertTrue(true);
    }


    /**
     * @depends testOne
     */
    public function testTwo() {
        echo 'testTwo';
        $this->assertTrue(true);
    }
}