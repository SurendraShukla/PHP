<?php

namespace design_patterns\Strategy\behaviour;


class DivideOperator implements Operator {

    public function execute(int $val1, int $val2) {
        return $val1 / $val2;
    }

}