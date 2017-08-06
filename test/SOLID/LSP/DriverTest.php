<?php

use PHPUnit\Framework\TestCase;
use src\SOLID\LSP\Driver;
use src\SOLID\LSP\Car;
use src\SOLID\LSP\Maruti;
use src\SOLID\LSP\Tata;

class DriverTest extends TestCase {

    /**
     * @test
     */
    public function substitutionChecksWork(){

        $car = new Car();
        // $car = new Maruti();
        // $car = new Tata();

        $driver = new Driver($car);
        $driver->go();
    }

}
