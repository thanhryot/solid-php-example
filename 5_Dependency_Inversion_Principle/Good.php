<?php

interface DataBase
{
    public function openConnection();

    public function closeConnection();
}

class Mysql implements DataBase
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

    public function __construct(DataBase $dataBase)
    {
        $this->database = $dataBase;
        $this->database->openConnection();
    }

    //    todo something more...

    public function __destruct()
    {
        $this->database->closeConnection();
    }
}

