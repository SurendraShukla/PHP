<?php
/*
 * The addition of a new escape character, \u, allows us to specify Unicode character code points
 * (in hexidecimal) unambiguously inside PHP strings
 * \u{CODEPOINT}
*/


// echo 💚
echo "\u{1F49A}";
