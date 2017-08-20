<?php

namespace src\SOLID\LSP;

class Driver {

    private $car;

    /**
     * Driver constructor.
     * @param Car $car
     */
    public function __construct(Car $car) {
        $this->car = $car;
    }

    public function go() {
        $this->car->drive();
    }

}