<?php
try {
    require 'file-with-parse-error.oops';
} catch (ParseError $e) {
    echo $e->getMessage(), "\n";
}
