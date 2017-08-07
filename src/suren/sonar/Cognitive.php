<?php

namespace src\suren\sonar;

/*
 * Cognitive Complexity for measuring maintainability
 * Cognitive Complexity, how difficult the control flow of a method is to understand,
 *      and therefore to maintain.
 * Clean coding practices by incrementing for code constructs that take extra effort to understand, and by ignoring structures that make code easier to read.
 *
 *
 * Basic criteria
 *  We boiled that guiding principle down into three simple rules:
 *      Increment when there is a break in the linear (top-to-bottom, left-to-right) flow of the code
 *      Increment when structures that break the flow are nested
 *      Ignore "shorthand" structures that readably condense multiple lines of code into one
 *
 * Cognitive Complexity increments in a familiar way for the other control flow structures:
 *      for, while, do while, ternary operators, if/#if/#ifdef/..., else if/elsif/elif/..., and else, as well as for catch statements.
 * Additionally, it increments for jumps to labels (goto, break, and continue) and for each level of control flow nesting
 *
 */
class Cognitive {

    private $name;

    public function __construct(string $name) {      // +0
        $this->name = $name;
    }

    public function setName(string $name): void {   // +0
        $this->name = $name;
    }

    public function getName(): string {             // +0
        return $this->name;
    }

    // Cognitive Complexity 4
    public function sumOfPrimes(int $max): int{
        int:
        $total = 0;
        for ($i = 1; $i <= $max; ++$i) {            // +1
            for ($j = 2; $j < $i; ++$j) {           // +2 (nesting=1)
                if ($i % $j == 0) {                 // +3 (nesting=2)
                    continue;                       // +1
                }
            }
            $total += $i;
        }
        return $total;
    }

    // Cognitive Complexity 4
    public function getWords(int $number): String{
        switch ($number) {                          // +1
            case 1:
                return "one";
            case 2:
                return "a couple";
            default:
                return "lots";
        }
    }

}

