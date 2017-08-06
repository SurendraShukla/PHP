<?php

use PHPUnit\Framework\TestCase;


class SpiralMatrixTest extends TestCase {

    /**
     * @test
     */
    public function shouldPrint1CharacterIf1x1MatrixIsPassed() {
        $matrix[0] = "11";
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("11 ", $spiralMatrix->getMatrixSpiralValues());
    }


    /**
     * @test
     */
    public function shouldPrint2CharacterIf2x1MatrixIsPassed() {
        $matrix = array(1,2);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 ", $spiralMatrix->getMatrixSpiralValues());
    }

    /**
     * @test
     */
    public function shouldPrint2CharacterIf1x2MatrixIsPassed() {
        $matrix[0] = array(1,2);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 ", $spiralMatrix->getMatrixSpiralValues());
    }

    /**
     * @test
     */
    public function shouldPrint4CharacterIf2x2MatrixIsPassed() {
        $matrix[0] = array(1,2);
        $matrix[1] = array(3,4);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 4 3 ", $spiralMatrix->getMatrixSpiralValues());
    }


    /**
     * @test
     */
    public function shouldPrint6CharacterIf2x3MatrixIsPassed() {
        $matrix[0] = array(1,2,3);
        $matrix[1] = array(4,5,6);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 3 6 5 4 ", $spiralMatrix->getMatrixSpiralValues());
    }


    /**
     * @test
     */
    public function shouldPrint6CharacterIf3x2MatrixIsPassed() {
        $matrix[0] = array(1,2);
        $matrix[1] = array(3,4);
        $matrix[2] = array(5,6);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 4 6 5 3 ", $spiralMatrix->getMatrixSpiralValues());
    }


    /**
     * @test
     */
    public function shouldPrint9CharacterIf3x3MatrixIsPassed() {
        $matrix[0] = array(1,2,3);
        $matrix[1] = array(4,5,6);
        $matrix[2] = array(7,8,9);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 3 6 9 8 7 4 5 ", $spiralMatrix->getMatrixSpiralValues());
    }

    /**
     * @test
     */
    public function shouldPrint12CharacterIf3x4MatrixIsPassed() {
        $matrix[0] = array(1,2,3,10);
        $matrix[1] = array(4,5,6,11);
        $matrix[2] = array(7,8,9,12);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 3 10 11 12 9 8 7 4 5 6 ", $spiralMatrix->getMatrixSpiralValues());
    }

    /**
     * @test
     */
    public function shouldPrint12CharacterIf4x3MatrixIsPassed() {
        $matrix[0] = array(1,2,3);
        $matrix[1] = array(4,5,6);
        $matrix[2] = array(7,8,9);
        $matrix[3] = array(10,11,12);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 3 6 9 12 11 10 7 4 5 8 ", $spiralMatrix->getMatrixSpiralValues());
    }

    /**
     * @test
     */
    public function shouldPrint25CharacterIf5x5MatrixIsPassed() {
        $matrix[0] = array(1,2,3,4,5);
        $matrix[1] = array(6,7,8,9,10);
        $matrix[2] = array(11,12,13,14,15);
        $matrix[3] = array(16,17,18,19,20);
        $matrix[4] = array(21,22,23,24,25);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 3 4 5 10 15 20 25 24 23 22 21 16 11 6 7 8 9 14 19 18 17 12 13 ", $spiralMatrix->getMatrixSpiralValues());
    }

    /**
     * @test
     */
    public function shouldReturn16CharactersIf4x4MatrixIsPassed() {
        $matrix[0] = array(1,2,3,4);
        $matrix[1] = array(5,6,7,8);
        $matrix[2] = array(9,10,11,12);
        $matrix[3] = array(13,14,15,16);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 3 4 8 12 16 15 14 13 9 5 6 7 11 10 ", $spiralMatrix->getMatrixSpiralValues());
    }


    /**
     * @test
     */
    public function shouldReturn18CharactersIf3x6MatrixIsPassed() {
        $matrix[0] = array(1,2,3,4,5,6);
        $matrix[1] = array(7,8,9,10,11,12);
        $matrix[2] = array(13,14,15,16,17,18);
        $spiralMatrix = new SpiralMatrix($matrix);
        $this->assertEquals("1 2 3 4 5 6 12 18 17 16 15 14 13 7 8 9 10 11 ", $spiralMatrix->getMatrixSpiralValues());
    }
}