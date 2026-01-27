<?php

// Parent Class
class Animal
{
    public $name;

    public function eat()
    {
        echo $this->name . " is eating<br>";
    }
}

// Child Class
class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " is barking<br>";
    }
}

// Object of Child Class
$dog = new Dog();
$dog->name = "Tommy";

$dog->eat();   // Parent class method
$dog->bark();  // Child class method
