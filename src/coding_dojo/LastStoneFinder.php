<?php

namespace coding_dojo;

class LastStoneFinder {


    public function getNoOfStones() {
        return 15;
    }

    public function lastStoneNumber($noOfStone, $diff1, $diff2) {

        $returnArray=array();

        for($counter=1,$revCounter = $noOfStone; $counter<=$noOfStone; $counter++, $revCounter--) {

            $lastStone = $diff1*($noOfStone-$counter) + $diff2*($noOfStone-$revCounter);
            array_push($returnArray, $lastStone);

        }

        return (count($returnArray)) ? array_unique($returnArray) : array(0);

    }

}

