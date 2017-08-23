<?php

namespace design_patterns\Flyweight;


interface FlyweightInterface
{
    public function render(string $extrinsicState): string;
}
