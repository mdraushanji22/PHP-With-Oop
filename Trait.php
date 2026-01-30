<?php
trait PrentCompany
{
    function getTotal()
    {
        echo 700;
    }
    function getName()
    {
        echo "Raushan";
    }
}
class Company
{
    use PrentCompany;
}
$comp = new Company();
$comp->getTotal();
echo "<br>";
$comp->getName();
