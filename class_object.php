<?php
class MathOprations
{
    function sum($a, $b)
    {
        echo $a + $b;
    }
}
$maths = new MathOprations();
$maths->sum(100, 400);
