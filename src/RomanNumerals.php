<?php
declare(strict_types=1);

namespace src;


class RomanNumerals {

    private static $VALUES  = [1000, 900,  500, 400,  100, 90,   50,  40,   10,  9,    5,   4,    1  ];
    private static $SYMBOLS = ["M",  "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"];

    public static function arabicToRoman(int $arabicNumber): string {

        $result = '';
        $remaining = $arabicNumber;

        for($int=0; $int< count(self::$VALUES); $int++) {
            $remaining = self::appendRomanNumerals($remaining, self::$VALUES[$int], self::$SYMBOLS[$int], $result);
        }

        return $result;
    }

    private static function appendRomanNumerals(int $arabicNumber, int $val, string $romanDigits, string &$returnStr): int {

        $remaining = $arabicNumber;
        while($remaining >= $val) {
            $returnStr.= $romanDigits;
            $remaining-= $val;
        }
        return $remaining;
    }
}
