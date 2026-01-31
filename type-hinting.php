<?php
class Fruits
{
    function getName($name)
    {
        echo $name;
    }
}
$fruit = new Fruits();
$fruit->getName("Banana");
