<?php

namespace design_patterns\Facade\Computer;


class CPU
{
    public function freeze() {
        echo "\nCPU Freeze";
    }
    public function jump($position) {
        echo "\nCPU $position jump";
    }
    public function execute() {
        echo "\nCPU executed";
    }
}