<?php

interface IEmployeeStore
{
    public function getEmployeeById(int $id): Employee;

    public function addEmployee(Employee $employee): void;

    public function sendEmail(Employee $employee, string $content): void;
}

class EmployeeStore implements IEmployeeStore
{
    public function getEmployeeById(int $id): Employee
    {
        // add logic
    }

    public function addEmployee(Employee $employee): void
    {
        // add logic
    }

    public function sendEmail(Employee $employee, string $content): void
    {
        // add logic
    }
}