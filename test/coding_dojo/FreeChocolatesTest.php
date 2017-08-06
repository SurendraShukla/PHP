<?php

use PHPUnit\Framework\TestCase;
use src\coding_dojo\FreeChocolates;

Class FreeChocolatesTest extends TestCase {

	/**
	 * @test
	 */
	public function shouldGet0ChocolateFor1Or2Rupees() {
		$freeChocolates= new FreeChocolates();
        $this->assertEquals(0, $freeChocolates->getTotalChocolates(1));

        $freeChocolates= new FreeChocolates();
        $this->assertEquals(0, $freeChocolates->getTotalChocolates(2));
	}
    
    /**
     * @test
     */
    public function shouldGet1ChocolateFor3Rupees(){
        $freeChocolates= new FreeChocolates();
        $this->assertEquals(1, $freeChocolates->getTotalChocolates(3));

        $freeChocolates= new FreeChocolates();
        $this->assertEquals(1, $freeChocolates->getTotalChocolates(4));
    }

    /**
     * @test
     */
    public function shouldGet2ChocolateFor6Rupees(){
        $freeChocolates= new FreeChocolates();
        $this->assertEquals(2, $freeChocolates->getTotalChocolates(6));
    }

    /**
     * @test
     */
    public function shouldGet4ChocolateFor9Rupees(){
        $freeChocolates= new FreeChocolates();
        $this->assertEquals(4, $freeChocolates->getTotalChocolates(9));
    }

    /**
     * @test
     */
    public function shouldGet22ChocolateFor45Rupees(){
        $freeChocolates= new FreeChocolates();
        $this->assertEquals(22, $freeChocolates->getTotalChocolates(45));
    }
    
    /**
     * @test
     */
    public function shouldGet49ChocolateFor100Rupees(){
        $freeChocolates= new FreeChocolates();
        $this->assertEquals(49, $freeChocolates->getTotalChocolates(100));
    }
}
?>