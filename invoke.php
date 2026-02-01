<?php
class User
{
    function __invoke()
    {
        echo "Invoke function call";
    }
    function getName()
    {
        echo "Md Raushan Jilani";
    }
}
$user = new User();
$user();
echo "<br>";
$user->getName();
