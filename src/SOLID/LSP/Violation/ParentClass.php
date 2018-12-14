<?php

namespace SOLID\LSP\Violation;

class ParentClass {

    public function noArgumentPassed() {}
    public function argumentPassed($var) {}
    public function argumentWithType(int $a) {}
    public function multipleArgumentsPassed(int $a, bool $b) {}

}