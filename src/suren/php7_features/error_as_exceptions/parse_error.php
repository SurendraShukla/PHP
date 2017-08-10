<?php
try {
    require 'file-with-parse-error.php';
} catch (ParseError $e) {
    echo $e->getMessage(), "\n";
}
