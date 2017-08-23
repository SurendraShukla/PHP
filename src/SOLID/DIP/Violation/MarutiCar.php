<?php

namespace SOLID\DIP\Violation;
use SOLID\DIP\Violation\MRFTires;
use SOLID\DIP\Violation\SuzukiEngine;

// Class is brittle, inflexible, and hard to test.
// 1. Change in SuzukiEngine - Engine class evolves and its constructor requires a parameter.
// 2. What if we want to put a different brand of tires or different type of engine.
class MarutiCar {

    private $engine;
    private $tires;
    private $description = 'NO DI';

    // The constructor not only assigns needed dependencies to internal properties, it also knows how those object are created.
    // Engine object is created using the Engine constructor,
        // Tires seems to be a singleton interface and
        // the doors are requested via a global object that acts as a service locator

    // If we want to write testable code, we need to write reusable code.
    // Testable code is reusable code and vise versa

    // Our code should work in any environment as long as all dependencies are satisfied.
    public function __construct() {
        $this->engine = new SuzukiEngine();
        $this->tires = new MRFTires();
        //$this->doors = app.get('doors');
    }

    public function drive() {
        return $this->description.' Car with '.$this->engine->getCylinders().' cylinders and '.$this->tires->getMake().' tires.';
    }

}