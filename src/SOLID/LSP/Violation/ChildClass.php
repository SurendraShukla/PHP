<?php

namespace SOLID\LSP\Violation;

/*
 * For run-time error handling
 */
if (PHP_MAJOR_VERSION >= 7) {
    set_error_handler(function ($errno, $errstr) {
        return strpos($errstr, 'Declaration of function') === 0;
    }, E_WARNING);
}

// https://github.com/phan/phan/issues/149
class ChildClass extends ParentClass {

    /**
     * @suppress PhanParamSignatureMismatch
     */
    public function noArgumentPassed($var) {}

    /**
     * @suppress PhanParamSignatureRealMismatchTooManyRequiredParameters
     */
    public function argumentPassed() {}

    /**
     * @suppress PhanParamSignatureRealMismatchTooFewParameters
     */
    public function argumentWithType(bool $a) {}

    /**
     * @suppress PhanParamSignatureRealMismatchParamType
     */
    public function multipleArgumentsPassed(int $a) {}

}