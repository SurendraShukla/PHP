<?php

namespace SOLID\DIP\Violation;


/**
 * @property  cylinders
 */
class SuzukiEngine {

    private $cylinders = 'Suzuki';

    public function getCylinders() {
        return $this->cylinders;
    }

}
