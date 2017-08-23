<?php

namespace suren\code_refactoring\after;


class GuessStatisticsMessage
{

    private $number;
    private $verb;
    private $pluralModifier;

    public function make(string $candidate, int $count): string {
        $this->createPluralDependentMessageParts($count);
        return sprintf("There %s %s %s%s", $this->verb,
        $this->number, $candidate, $this->pluralModifier);
    }

    private function createPluralDependentMessageParts(int $count) {
        if ($count == 0) {
            $this->thereAreNoLetters();
        } else if ($count == 1) {
            $this->thereIsOneLetter();
        } else {
            $this->thereAreManyLetters($count);
        }
    }

    private function thereAreManyLetters(int $count) {
        $this->number = (string)$count;
        $this->verb = "are";
        $this->pluralModifier = "s";
    }

    private function thereIsOneLetter() {
        $this->number = "1";
        $this->verb = "is";
        $this->pluralModifier = "";
    }

    private function thereAreNoLetters() {
        $this->number = "no";
        $this->verb = "are";
        $this->pluralModifier = "s";
    }

}

$guessStatisticsMessage = new GuessStatisticsMessage();
echo $guessStatisticsMessage->make('w', 1);
