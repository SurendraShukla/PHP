<?php

namespace src\SOLID\ISP\Violation;

interface MachineInterface {
    public function printCopy();
    public function scan();
    public function fax();
    public function photoCopy();
}
class XeroxMachine implements MachineInterface {
    public function printCopy(){  }
    public function scan(){ }
    public function fax(){  }
    public function photoCopy(){  }
}
class CanonMachine implements MachineInterface {
    public function printCopy(){  }
    public function photoCopy(){  }
    public function scan(){ throw new \ScanNotAvailableException(); }
    public function fax(){ throw new \FaxNotAvailableException(); }
}

/**
 *  ISP Violation !
 *  CanonMachine should not depend upon
 *  interface methods that it don't use !
 */