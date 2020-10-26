<?php

class Mysql
{
    public function openConnection()
    {
        // todo code
    }

    public function closeConnection()
    {
        // todo code
    }
}

class App
{
    private $database;

    public function __construct()
    {
        $this->database = new Mysql();
        $this->database->openConnection();
    }

    //    todo something more...

    public function __destruct()
    {
        $this->database->closeConnection();
    }
}

