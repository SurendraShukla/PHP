<?php

// Error
$var = 1;
try {
    $var->method(); // Throws an Error object in PHP 7.
} catch (Error $e) {
    // Handle error
}

// TypeError


