<?php

namespace coding_dojo;

class FreeChocolates {

    private $chocolateCost = 3;
    private $noOfWrapperForFreeChocolate = 3;

    public function getTotalChocolates($totalRupees) {
        if($totalRupees < $this->chocolateCost)
            return 0;

        $totalChocolates = floor($totalRupees/$this->chocolateCost);
        return $totalChocolates+$this->getFreeChocolates($totalChocolates);
    }

    public function getFreeChocolates($wrappers) {
        $extraWrappers      = 0;
        $totalFreeChocolates= 0;
        $totalWrapper = ($wrappers+$extraWrappers);
        while( $totalWrapper >= $this->noOfWrapperForFreeChocolate) {
            $extraWrappers  = ($totalWrapper%$this->noOfWrapperForFreeChocolate);
            $wrappers       = floor($totalWrapper/$this->noOfWrapperForFreeChocolate);
            $totalWrapper = $wrappers+$extraWrappers;
            $totalFreeChocolates+=$wrappers;
        }
        return $totalFreeChocolates;
    }
}
?>