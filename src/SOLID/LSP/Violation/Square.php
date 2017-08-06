<?php

namespace src\SOLID\LSP\Violation;

class Square extends Rectangle {

    public function setWidth(int $width):int {
        $this->_width = $width;
        $this->_height = $width;
    }

    public function setHeight(int $height):int {
        $this->_width = $height;
        $this->_height = $height;
    }

}
