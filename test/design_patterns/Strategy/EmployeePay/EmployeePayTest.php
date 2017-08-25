<?php

namespace design_patterns\Strategy\EmployeePay;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class EmployeePayTest extends TestCase
{
    public function test()
    {
        $employee = new Employee('Surendra', EmployeeType::INTERN, 10000);
        Assert::assertEquals(11000, $employee->getPay());

    }
}