<?php

namespace test\suren;

use PHPUnit\Framework\TestCase;
use suren\ProductionClass;

class Mock_Example_Test extends TestCase{

    /**
     * @test
     */
    public function fullMock() {
        // Create a stub for the SomeClass class.
        $dummy = $this->createMock(ProductionClass::class);
        print_r($dummy);

        var_dump($dummy instanceof ProductionClass);
        echo "\n\n[".$dummy->getAge()."] [".$dummy->greet('wow').'] ['.$dummy->loginAttemptCheck().']';
        $this->assertEquals(null, $dummy->greet('Hi'));


//         Configure the stub.
        $dummy->method('greet')
            ->willReturn('mockedOutput');
//            ->will($this->returnArgument(0));
//            ->will($this->returnSelf());

        $dummy->method('greet')
            ->willReturn('mockedOutput');
//            ->will($this->returnArgument(0));
//            ->will($this->returnSelf());

        // Calling $stub->doSomething() will now return 'foo'.
        $this->assertEquals('mockedOutput', $dummy->greet('Hi'));
        $this->assertEquals(null, $dummy->getAge());
    }



    /**
     * @test
     */
    public function partialMock() {
        $partialMock = $this->getMockBuilder(ProductionClass::class)
            ->setMethods(['greet'])
            ->setConstructorArgs(array('Mignon', 2))
            ->getMock();
        print_r($partialMock);
        echo "[".$partialMock->getAge()."] [".$partialMock->greet('wow').'] ['.$partialMock->loginAttemptCheck().']';
        $this->assertEquals(null, $partialMock->greet('Hi'));
        $this->assertEquals(2, $partialMock->getAge());


        $partialMock->expects($this->any())
            ->method('greet')
            ->with($this->equalTo('Hi'))
            ->willReturn('Hello');
        $this->assertEquals('Hello', $partialMock->greet('Hi'));

    }


//
//    /**
//     * @test
//     */
    public function spy()
    {

        // Create a prophecy for the Observer class.
        $observer = $this->prophesize(Observer::class);

        // Set up the expectation for the update() method
        // to be called only once and with the string 'something'
        // as its parameter.
        $observer->update('something')->shouldBeCalled();
    }

}