<?php

use PHPUnit\Framework\TestCase;

class SortTest extends TestCase {

    public function testModifiedBubbleSort() {
        $this->callSort('ModifiedBubbleSort');
    }

    public function testSelectionSort() {
        $this->callSort('SelectionSort');
    }

    public function testInsertionSort() {
        $this->callSort('InsertionSort');
    }
/*
    public function testMergeSort() {
        $this->callSort('MergeSort');
    }

    public function testHeapSort() {
        $this->callSort('HeapSort');
    }*/

    private function callSort($sortClass) {

        $unsortedArray= array(6,4,10,8,7,5,3,1,2,9);
        $expectedArray = array(1,2,3,4,5,6,7,8,9,10);
        $this->assertEquals($expectedArray, $sortClass::sort($unsortedArray));

        $unsortedArray= array(10,8,7,9,6);
        $expectedArray = array(6,7,8,9,10);
        $this->assertEquals($expectedArray, $sortClass::sort($unsortedArray));

        $sortedArray = array(1,2,3,4,5);
        $this->assertEquals($sortedArray, $sortClass::sort($sortedArray));
    }
}