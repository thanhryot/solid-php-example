<?php

abstract class Bird
{
}

abstract class FlyingBird extends Bird
{
    public abstract function fly();
}


class Parrot extends FlyingBird
{
    public function fly()
    {
        return "Parrot Fly";
    }
}

class Ostrich extends Bird
{
    // something more ...
}