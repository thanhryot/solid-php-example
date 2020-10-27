<?php

abstract class Employee
{
    public abstract function work();
}

class Tester extends Employee
{
    public function work()
    {
        return "Testing";
    }
}

class Coder extends Employee
{
    public function work()
    {
        return "Coding";
    }
}

class ProjectManager
{
    public function command(Employee $employee)
    {
        return $employee->work();
    }

    // No need to edit code in here when adding new employee type
}