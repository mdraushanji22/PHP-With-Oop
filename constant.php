<?php

class Car
{
    const NAME = "BMW";

    public function showCar()
    {
        echo self::NAME;   // self:: for same class
    }
}

$obj = new Car();
$obj->showCar();
