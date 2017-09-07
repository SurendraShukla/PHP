<?php

namespace suren;


class Mock_Example {

    private $_name;
    private $_age;

    private $_loginAttempted = 1;

    /**
     * Demo_Mock constructor.
     * @param $_name
     * @param $_age
     */
    public function __construct($_name, $_age) {
        echo "\n\n".'$_name='.$_name.' $_age='.$_age."\n\n";
        $this->_name = $_name;
        $this->_age = $_age;
    }

    public function greet(string $greet):string {
        echo "\n\n".'$greet='.$greet;
        return $greet.'!'.$this->_name;
    }

    public function getAge(): int {
        echo "\n\n".'inside getAge';
        return $this->_age;
    }

    public function loginAttemptCheck() {
        echo "\n\n".$this->_loginAttempted;
        if( $this->_loginAttempted <=0 ) {
            throw new Custom_Exception('Surendra Exception');
        }
        return $this->_loginAttempted--;
    }

}
