<?php

function getFilteredText($criteria, $text_to_filter) {
    return preg_replace_callback(
        '/\{([A-Z]+)\}/',
        function($m) use ($criteria) {
            return $criteria[$m['1']];
        },
        $text_to_filter
    );
}

// Alert : Total - 1000 request per second.
echo  getFilteredText ( array ( 'COUNT' => 1000 ), "Alert : Total - {COUNT} request per second." );
// Alert : Total - 2000 Order(s) Processed
echo  getFilteredText ( array ( 'COUNT' => 2000 ), "Alert : Total - {COUNT} request per second." );
// Test 1, 2 and 3
echo  getFilteredText (array ( 'FIRST' => 1, 'SECOND' => 2, 'THIRD' => 3), "Test {FIRST}, {SECOND} and {THIRD}" );
