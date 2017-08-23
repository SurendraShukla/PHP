<?php

namespace SOLID\LSP\Violation;

class Rectangle {

    protected $_width;
    protected $_height;

    public function setWidth(int $width) {
        $this->_width = $width;
    }

    public function setHeight(int $height) {
        $this->_height = $height;
    }

    public function getWidth():int {
        return $this->_width;
    }

    public function getHeight():int {
        return $this->_height;
    }

    public function getArea() : int {
        return $this->_height*$this->_width;
    }

}

