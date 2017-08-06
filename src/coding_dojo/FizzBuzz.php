<?php

namespace src\tdd;


use InvalidArgumentException;

class FizzBuzz
{

    /**
     * FizzBuzz constructor.
     */
    public function __construct()
    {
    }

    public function getFizzBuzzString($int): string
    {

        if( ($int%15) == 0) {
            return 'FizzBuzz';
        }elseif( ($int%3) == 0) {
            return 'Fizz';
        }elseif( ($int%5) == 0) {
            return 'Buzz';
        }

        return $int;

    }

    public function getFizzBuzzStringForSpecifiedLimit($limit)
    {
        if($limit<1) {
            throw new InvalidArgumentException;
        }
        $returnArr = [];
        for($counter=1; $counter<=$limit; $counter++) {
            array_push($returnArr, $this->getFizzBuzzString($counter));
        }
        return $returnArr;
    }
}