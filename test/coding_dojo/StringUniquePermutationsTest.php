<?php

use PHPUnit\Framework\TestCase;
use src\coding_dojo\StringUniquePermutation;

class StringUniquePermutationsTest extends TestCase {

    private $stringUniquePermutation;

    public function setup(){
        $this->stringUniquePermutation = new StringUniquePermutation();
    }

    /**
     * @test
     */
    public function shouldReturnSameCharacterIfStringLengthIsOne() {
        $returnChar = $this->stringUniquePermutation->FindStringUniquePermutation('a');
        $this->assertEquals(array('a'), $returnChar);
    }

    /**
     * @test
     */
    public function shouldReturn1PermutationForStringLength2ButCharacterIsRepeated() {
        $permutationStringArray = $this->stringUniquePermutation->FindStringUniquePermutation('aa');
        $expectedArray = array('aa');
        $this->assertEquals($expectedArray, $permutationStringArray);
    }

    /**
     * @test
     */
    public function shouldReturn3PermutationForStringLength3ButCharacterIsRepeated() {
        $permutationStringArray = $this->stringUniquePermutation->FindStringUniquePermutation('abb');
        $expectedArray = array('abb', 'bba', 'bab');
        sort($expectedArray);
        $this->assertEquals($expectedArray, $permutationStringArray);
    }

    /**
     * @test
     */
    public function shouldReturn2PermutationForStringLength2AndAllCharactersAreUnique() {
        $permutationStringArray = $this->stringUniquePermutation->FindStringUniquePermutation('ab');
        $expectedArray = array('ab','ba');
        $this->assertEquals($expectedArray, $permutationStringArray);
    }

    /**
     * @test
     */
    public function shouldReturn6PermutationForStringLength3AndAllCharactersAreUnique() {
        $permutationStringArray = $this->stringUniquePermutation->FindStringUniquePermutation('abc');
        $expectedArray = array('cab','abc','cba','bca','bac','acb');
        sort($expectedArray);
        $this->assertEquals($expectedArray, $permutationStringArray);
    }

    /**
     * @test
     */
    public function shouldReturn24PermutationForStringLength4AndAllCharactersAreUnique() {
        $permutationStringArray = $this->stringUniquePermutation->FindStringUniquePermutation('abcd');
        $expectedArray = array('acdb','dcab','acbd','bcda','bdca','bdac','dbca','bacd','cabd','cdba','cdab','badc','dabc','cadb','dbac','bcad','dacb','cbad','cbda','adcb','adbc','abdc','abcd','dcba');
        sort($expectedArray);
        $this->assertEquals($expectedArray, $permutationStringArray);
    }
}

?>