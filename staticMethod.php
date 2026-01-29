<?php
class Honda
{
    static public $countaryName = "Japan";
    static function companyName()
    {
        echo "Honda";
    }
}
Honda::companyName();
echo "<br>";
echo Honda::$countaryName;
// $honda = new Honda();
// $honda->companyName();
