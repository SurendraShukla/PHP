<?php
/*
 * PHP5
 *      Memory: 1336 MB
 *      Time: 2 seconds (Array creation time: 0.777s, Array destroy time: 1.45s)
 * PHP7
 *      Memory: 391 MB
 *      Time: 0.34 seconds (Array creation time: 0.29s, Array destroy time: 0.05s)
 * PHP7 with opcache
 *      Memory: 32 MB
 *      Time: 0.03 seconds (Array creation time: 0.03s, Array destroy time: 0.002s)
 */
$arrays = [];
for( $i=0; $i< 10000000; $i++) {
    $arrays[] = [1,2,3,4,5,67,8];
}



