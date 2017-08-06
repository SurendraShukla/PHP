<?php

use PHPUnit\Framework\TestCase;
use src\coding_dojo\MountainSkating;

Class MountainSkatingTest extends TestCase {

	//private $mountain
	
	public function __construct() {
		
	}
	
	public function testShouldReturn11For1Input() {
        /*
		$obj = new MountainSkating();
		$this->assertEquals("11", $obj->getLongestPath(1));
        */
	}
	
	public function testThrowsExceptionIfNonNumericIsPassed() {
		
	}
}
?>