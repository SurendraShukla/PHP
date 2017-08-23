<?php

use PHPUnit\Framework\TestCase;
use SOLID\DIP\Violation\MarutiCar;

class MarutiCarTest extends TestCase {

    /**
     * @test
     */
    public function classWithDI() {

        $marutiCar = new MarutiCar();
        $this->assertNotEmpty($marutiCar->drive());

    }

}