<?php

namespace design_patterns\Facade\Computer;


class HardDrive
{
    public function read($lba, $size) {
        echo "\nHardDrive read lba is $lba and size is $size";
    }

}