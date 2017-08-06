<?php

class RadixConverter {

    private static $conversionValues = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public static function convert($number, $radix) {
        if($number <= 0) return "";
        return RadixConverter::convert(floor($number/$radix), $radix).RadixConverter::$conversionValues[($number%$radix)];
    }

}