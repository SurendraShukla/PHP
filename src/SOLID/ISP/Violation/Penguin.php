<?php

namespace src\SOLID\ISP\Violation;

class Penguin implements BirdInterface {

    public function fly() {
        echo "Penguin is flying";
    }
}
