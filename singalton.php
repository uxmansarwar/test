<?php

class Test
{
    private static object $obj;

    public static array $arr;


    public static function sing()
    {
        var_dump(self::$arr);
        self::$obj = new stdClass;
        var_dump(isset(self::$obj));
    }
}

// Test::$arr = ['testing'];
Test::sing();
