<?php
function getLines($file) {
    $f = fopen($file, 'r');
    $returnData = '';
    $counter =0 ;
    try {
        while ($line = fgets($f)) {
            $returnData+=$line;
            $counter++;
            if( $counter % 30000 == 0) {
//                $returnData='';
                yield $returnData;
            }
        }
    } finally {
        fclose($f);
    }
}

foreach (getLines("file.txt") as $n => $line) {
    if ($n > 5) break;
    echo $line;
}

