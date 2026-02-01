<?php
class User
{
    public $name = "Md Raushan";
    private $age = 25;
    function __get($property)
    {
        echo "$property property is not exist";
    }
}
$user = new User();
echo $user->name;
echo "<br>";
echo $user->age;
