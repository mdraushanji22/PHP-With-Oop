<?php
class Properties
{
    public $name = "Raushan";
    function GetName()
    {

        echo $this->name;
    }
}
$p1 = new Properties();
$p1->GetName();
