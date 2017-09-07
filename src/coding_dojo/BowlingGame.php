<?php

namespace coding_dojo;


class BowlingGame
{
    private $score = 0;

    public function roll(int $pins): void
    {
        $this->score += $pins;
    }

    public function score(): int
    {
        return $this->score();
    }



}

