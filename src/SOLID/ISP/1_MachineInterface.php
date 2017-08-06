<?php

namespace src\SOLID\ISP;

interface MachineInterface {
    public function printCopy();
}
interface PhotoCopyMachineInterface {
    public function photoCopy();
}
interface ScanMachineInterface {
    public function scan();
}
interface FaxMachineInterface {
    public function fax();
}
class XeroxMachine implements
    MachineInterface,
    PhotoCopyMachineInterface,
    ScanMachineInterface,
    FaxMachineInterface {

    public function printCopy(){  }
    public function scan(){  }
    public function fax(){  }
    public function photoCopy(){  }
}
class CanonMachine implements MachineInterface, PhotoCopyMachineInterface {
    public function printCopy(){  }
    public function photoCopy(){  }
}
/**
 *  Many client-specific interfaces are better
 *  than one general-purpose interface
 */
