<?php
class UserAuth
{

    function login($userType)
    {

        echo $userType . "Logged in";
    }
}
class Students extends UserAuth
{
    function GetName()
    {
        echo "Raushan";
    }
}
class Teachers extends UserAuth
{
    function TeacherName()
    {
        echo "Jilani";
    }
}

$s1 = new Students();
$s1->login("Student");
echo "<br>";
$s1->GetName();

$t1 = new Teachers();
echo "<br>";
$t1->login("Teacher");
echo "<br>";
$t1->TeacherName();
