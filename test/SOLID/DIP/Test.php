<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase {

    /**
     * @test
     */
    public function return() {

        //$yearlyAmount = 50000;
        $returnAmount = 50000;
        for($year=1; $year<=10; $year++) {
            $yearlyAmount = ($year == 1) ? 0 : 50000;
            $returnAmount+=$yearlyAmount+(($returnAmount*0.10));
//            echo "\n".$year."=".$returnAmount;
        }

//        echo $returnAmount;
    }
    
}

