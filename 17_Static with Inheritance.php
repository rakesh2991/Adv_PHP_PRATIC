<?php
class Father{
    public static $a=20;

}
class Son extends Father{
    function disp(){
        echo self::$a; 
        /* or both method use */
        // echo Father::$a;         //class se bhi call kar shak te hai
    }
}

$obj = new Son;
$obj->disp();


?>