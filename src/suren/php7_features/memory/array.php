<?php


function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

$startMemory = memory_get_usage();
$array = range(1, 100000);
echo convert(memory_get_usage() - $startMemory);

