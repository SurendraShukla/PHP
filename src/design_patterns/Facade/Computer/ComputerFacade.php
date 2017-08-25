<?php

namespace design_patterns\Facade\Computer;


class ComputerFacade
{
    const BOOT_ADDRESS = 100;
    const BOOT_SECTOR = 101;
    const SECTOR_SIZE = 102;

    protected $cpu;
    protected $memory;
    protected $hd;

    public function __construct()
    {
        $this->cpu = new CPU;
        $this->ram = new Memory;
        $this->hd = new HardDrive;
    }

    public function start()
    {
        $this->cpu->freeze();
        $this->ram->load(self::BOOT_ADDRESS, $this->hd->read(self::BOOT_SECTOR, self::SECTOR_SIZE));
        $this->cpu->jump(self::BOOT_ADDRESS);
        $this->cpu->execute();
    }
}