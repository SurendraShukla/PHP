<?php
function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

$startMemory = memory_get_usage();
$array = new SplFixedArray(100000);
for ($i = 0; $i < 100000; ++$i) {
    $array[$i] = $i;
}
echo convert(memory_get_usage() - $startMemory);
