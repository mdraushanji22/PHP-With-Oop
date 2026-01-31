<?php
class Company
{
    function getName()
    {

        echo "This is Honda";
        return $this;
    }
    function getCar()
    {
        echo "<br>";

        echo "This is Tyota";
        return $this;
    }
    function getPrice()
    {
        echo "<br>";

        echo 30000000;
    }
}
//Method Chaining
$company = new Company();
$company->getName()->getCar()->getPrice();
