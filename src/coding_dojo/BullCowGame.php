<?php
namespace src\coding_dojo;


class BullCowGame {

    private $bullCount = 0;

    public function getBullCowCount($secretKeys, $guesses)
    {
        $strLength = strlen($secretKeys);
        $bullCount = 0;
        $cowCount = 0;

        for($i=0;$i<$strLength;$i++){
            $charPosition = strpos($guesses, $secretKeys[$i]);
            if($this->isBull($secretKeys, $guesses, $i)) {
                $this->resetGuessesChar($secretKeys, $guesses, $i);
                $bullCount++;
            }elseif($this->isCow($charPosition, $i)){
                $cowCount++;
            }
        }
        return $bullCount."B".$cowCount."C";
    }


    private function isBull($secretKeys, $guesses, $i) {
        return $secretKeys[$i] == $guesses[$i];
    }

    private function isCow($charPosition, $i) {
        return ($charPosition !== false) && ($charPosition != $i);
    }

    private function resetGuessesChar(&$secretKeys, &$guesses, $i) {
        $secretKeys[$i] = '-';
        $guesses[$i] = '-';
    }

}