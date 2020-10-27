<?php

abstract class Bird
{
    public abstract function fly();
}


class Parrot extends Bird
{
    public function fly()
    {
        return "Parrot Fly";
    }
}

class Ostrich extends Bird
{
    public function fly()
    {
        // Ostrich can't fly!!
    }

    // something more ...
}