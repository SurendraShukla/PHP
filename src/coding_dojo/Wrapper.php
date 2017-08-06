<?php

namespace src\coding_dojo;


class Wrapper {
    
    private $columnLength = 0;
    
    public function __construct($columnLength) {
        $this->columnLength = $columnLength;
    }
    
    public function wrap(string $string) {

        //$string = trim($string);
        if(strlen($string) <= $this->columnLength) {
            return $string;
        }

        $spaceIndex = strrpos(substr($string, 0 , $this->columnLength), ' ');
        if($spaceIndex !== false) {
            return substr($string, 0, $spaceIndex)."\n".self::wrap(substr($string, $spaceIndex+1), $this->columnLength);
        }

        return substr($string, 0, $this->columnLength)."\n".self::wrap(substr($string, $this->columnLength), $this->columnLength);

    }
}