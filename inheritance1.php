<?php
class UserAuth
{

    function login($userName)
    {

        echo $userName . "Logged in";
    }
}
class Students extends UserAuth {}
class Teachers extends UserAuth {}

$s1 = new Students();
$s1->login("Student");

$t1 = new Teachers();
echo "<br>";
$t1->login("Teacher");
