<?php
class student{
    static $version;
    public static function display($num)
    {
        self::$version = $num;              //class properties ko acces karne ke static $version;
        echo "hello php version " . self::$version;
    }
}

student::display(7);

// output
// hello php version7

?>