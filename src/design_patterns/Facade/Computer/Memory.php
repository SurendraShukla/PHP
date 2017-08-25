<?php

namespace design_patterns\Facade\Computer;


class Memory
{
    public function load($position, $data) {
        echo "\nMemory load position is $position and data is $data";
    }
}