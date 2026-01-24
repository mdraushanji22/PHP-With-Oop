<?php
class ConstructorDemo
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function display()
    {
        echo $this->name;
    }
}
$cd = new ConstructorDemo("Md Raushan JIlani");
$cd->display();
