<?php
function add(int $left, int $right)
{
    return $left + $right;
}

try {
    $value = add('left', 'right');
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
