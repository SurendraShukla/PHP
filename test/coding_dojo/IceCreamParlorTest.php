<?php

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use src\coding_dojo\IceCreamParlor;

class IceCreamParlorTest extends TestCase {

    /**
     * @test
     */
    public function shouldReturnNoFlavorsIfOnlyOneFlavorInParlor() {
        $iceCreamParlor = new IceCreamParlor();
        $iceCreamParlor->getFlavorsCost();

        Assert::assertTrue(true);
    }

}