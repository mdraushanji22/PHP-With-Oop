<?php

class A
{
    public static function test()
    {
        static::who();   // LSB
    }

    public static function who()
    {
        echo "I am A<br>";
    }
}

class B extends A
{
    public static function who()
    {
        echo "I am B<br>";
    }
}

B::test();
