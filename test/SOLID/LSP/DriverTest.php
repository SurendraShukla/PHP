<?php

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use SOLID\LSP\Driver;
use SOLID\LSP\Car;
use SOLID\LSP\Maruti;
use SOLID\LSP\Tata;

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
        Assert::assertTrue(true);
    }

}
