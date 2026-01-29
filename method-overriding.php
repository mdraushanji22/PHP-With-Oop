<?php
class Teacher
{
    public $city = "Delhi";
    function nextExam()
    {
        echo "next exam is maths";
    }
    function age()
    {
        echo "my age is 24";
    }
}
class Student extends Teacher
{
    public $city = "Noida";
    function age()
    {
        echo "my age is 40";
    }
}
$t1 = new Teacher();
$t1->age();
echo "<br>";

$st1 = new Student();
$st1->age();
echo "<br>";

echo $st1->city;
