<?php

interface IEmployeeStore
{
    public function getEmployeeById(int $id): Employee;

    public function addEmployee(Employee $employee): void;
}

interface IEmailSender
{
    public function sendEmail(Employee $employee, string $content): void;
}

class EmailSender implements IEmailSender
{
    public function sendEmail(Employee $employee, string $content): void
    {
        // add logic
    }
}

class EmployeeStore implements IEmployeeStore
{
    // inject in runtime
    private IEmailSender $emailSender;

    public function __construct(IEmailSender $emailSender)
    {
        $this->emailSender = $emailSender;
    }

    public function getEmployeeById(int $id): Employee
    {
        // add logic
    }

    public function addEmployee(Employee $employee): void
    {
        // add logic
    }

}