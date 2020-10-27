<?php

abstract class Employee
{
}

class Tester extends Employee
{
    public function testing()
    {
        return "Testing";
    }
}

class Coder extends Employee
{
    public function coding()
    {
        return "Coding";
    }
}

class ProjectManager
{
    public function command(Employee $employee)
    {
        if ($employee instanceof Tester) {
            return $employee->testing();
        } else if ($employee instanceof Coder) {
            return $employee->coding();
        }
        // ... more code in here when adding new employee type
    }
}