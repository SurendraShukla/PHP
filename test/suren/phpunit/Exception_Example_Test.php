<?php

namespace test\suren;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use src\suren\Exception_Example;
use src\suren\Custom_Exception;

class Exception_Example_Test extends TestCase {

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function ableToHandleExceptionUsingPHPDocs() {
        Exception_Example::throwInvalidArgumentException(0);
    }

    /**
     * @test
     */
    public function ableToHandleException() {
        $this->expectException(InvalidArgumentException::class);
        Exception_Example::throwInvalidArgumentException(0);
    }


    /**
     * @test
     */
    public function ableToHandleCustomException(){
        $this->expectException(Custom_Exception::class);
        Exception_Example::throwCustomException();
    }
//
//    /**
//     * @test
//     * @expectedException SurendraException
//     */
//    public function ableToHandleCustomExceptionUsingAnnotations(){
//        Demo_Exception::throwCustomException();
//    }
//

}