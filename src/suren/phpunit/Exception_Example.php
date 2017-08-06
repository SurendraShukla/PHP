<?php

namespace src\suren;

use InvalidArgumentException;

class Exception_Example {

    public static function throwInvalidArgumentException($no) {
        if($no<1) {
            throw new InvalidArgumentException;
        }
    }

    public static function throwCustomException() {
        throw new Custom_Exception('Surendra Exception');
    }

}


