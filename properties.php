<?php
class Properties
{
    public $name = "Raushan";
    function GetName()
    {

        echo $this->name;
    }
    function updateName($name)
    {
        $this->name = $name;
    }
}
$p1 = new Properties();
$p1->updateName("Jilani");
$p1->GetName();
