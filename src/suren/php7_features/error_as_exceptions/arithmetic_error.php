<?php
try {
    $value = 1 << -1;
} catch (ArithmeticError $e) {
    echo $e->getMessage(), "\n";
}



