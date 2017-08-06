<?php

namespace src\SOLID\ISP\Violation;

class Pigeon implements BirdInterface {

    public function fly() {
        echo "Pigeon is flying";
    }

}
