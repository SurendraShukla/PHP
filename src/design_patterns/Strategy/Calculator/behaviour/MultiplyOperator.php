<?php

namespace src\suren\design_patterns\Strategy\behaviour;


class MultiplyOperator implements Operator{

    public function execute(int $val1, int $val2) {
        return $val1 * $val2;
    }

}