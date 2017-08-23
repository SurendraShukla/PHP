<?php

namespace SOLID\ISP\Violation;

interface MachineInterface {
    public function printCopy();
    public function photoCopy();
    public function scan();
    public function fax();
}
class XeroxMachine implements MachineInterface {
    public function printCopy(){  }
    public function photoCopy(){  }
    public function scan(){ }
    public function fax(){  }
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