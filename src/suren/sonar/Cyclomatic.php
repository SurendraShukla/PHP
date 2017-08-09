<?php

namespace src\suren\sonar;

/*
 * Cyclomatic Complexity works very well for measuring testability
 * These two methods share the same Cyclomatic Complexity,
 *      but clearly not the same maintainability
 * Cyclomatic Complexity correlates to lines of code
 */
class Cyclomatic {

    private $name;

    public function __construct(string $name) {      // +1
        $this->name = $name;
    }

    public function setName(string $name): void {   // +1
        $this->name = $name;
    }

    public function getName(): string {             // +1
        return $this->name;
    }

    // Cyclomatic Complexity 4
    public function getWords(int $number): String{  // +1
        switch ($number) {
            case 1:                                 // +1
                return "one";
            case 2:                                 // +1
                return "a couple";
            default:                                // +1
                return "lots";
        }
    }

    // Cyclomatic Complexity 4
    public function sumOfPrimes(int $max): int{     // +1
        int:
        $total = 0;
        for ($i = 1; $i <= $max; ++$i) {            // +1
            for ($j = 2; $j < $i; ++$j) {           // +1
                if ($i % $j == 0) {                 // +1
                    continue;
                }
            }
            $total += $i;
        }
        return $total;
    }

}
