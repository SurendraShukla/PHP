<?php

use PHPUnit\Framework\TestCase;
use SOLID\LSP\Violation\Rectangle;
use SOLID\LSP\Violation\Square;

class RectangleTest extends TestCase {

    /**
     * @test
     */
    public function substitutionChecksWork(){

        $obj = new Rectangle();
        //$obj = new Square();

        $obj->setHeight(10);
        $obj->setWidth(20);
        $this->assertSame(200, $obj->getArea());

    }


}

