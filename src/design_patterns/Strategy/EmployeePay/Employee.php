<?php

namespace src\design_patterns\Strategy\EmployeePay;


// Eum type in PHP
class EmployeeType
{
    const INTERN = 1;
    const TRAINEE = 2;
    const WEB_DESIGNER = 3;
    const WEB_DEVELOPER = 4;
}


class Employee
{

    private $name;
    private $employeeType;
    private $basicSalary;

    public function __construct(
        string $name,
        int $employeeType,
        int $basicSalary
    ) {
        $this->name = $name;
        $this->employeeType = $employeeType;
        $this->basicSalary = $basicSalary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmployeeType(): EmployeeType
    {
        return $this->employeeType;
    }

    public function getBasicSalary(): double
    {
        return $this->basicSalary;
    }

    public function getPay(): int
    {
        $pay = 0.0;

        echo '['.$this->employeeType.']';

        if ($this->employeeType == EmployeeType::INTERN) {
            $pay = $this->basicSalary + ($this->basicSalary * 0.10);
        } else if ($this->employeeType == EmployeeType::WEB_DEVELOPER) {
            $pay = $this->basicSalary + ($this->basicSalary * 0.20);
        } else if ($this->employeeType == EmployeeType::TRAINEE) {
            $pay = $this->basicSalary + ($this->basicSalary * 0.12);
        } else  if ($this->employeeType == EmployeeType::WEB_DESIGNER) {
            $pay = $this->basicSalary + ($this->basicSalary * 0.15);
        }
        return $pay;
    }
}

$employee = new Employee('Surendra', EmployeeType::INTERN, 10000);
echo $employee->getPay();



