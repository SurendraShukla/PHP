<?php

namespace design_patterns\Strategy\behaviour;


interface Operator {
    function execute(int $val1, int $val2);
}
