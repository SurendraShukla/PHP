<?php

use PHPUnit\Framework\TestCase;
use src\SOLID\DIP\Violation\MarutiCar;

class MarutiCarTest extends TestCase {

    /**
     * @test
     */
    public function classWithDI() {

        $marutiCar = new MarutiCar();
        $this->assertNotEmpty($marutiCar->drive());

    }

}