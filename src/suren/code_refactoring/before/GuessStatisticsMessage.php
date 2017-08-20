<?php

namespace src\suren\code_refactoring\before;

function printGuessStatistics(string $candidate, int $count)  {
    $number = '';
    $verb = '';
    $pluralModifier = '';
    if ($count == 0) {
        $number = "no";
        $verb = "are";
        $pluralModifier = "s";
    } else if ($count == 1) {
        $number = "1";
        $verb = "is";
        $pluralModifier = "";
    } else {
        $number = (string)$count;
        $verb = "are";
        $pluralModifier = "s";
    }
    $guessMessage = sprintf("There %s %s %s%s", $verb,
        $number, $candidate, $pluralModifier);
    echo $guessMessage."\n";
}

printGuessStatistics("w", 0);
