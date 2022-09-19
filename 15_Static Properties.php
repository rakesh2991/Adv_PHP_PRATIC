<?php
// value ko increment karane ke liya "static" keyword ka use kare gaye function ke under
// recall karne ke liay

// function display()          //defult function create 
// {
//     static $a=0;
//     $a++;
//     return $a;
// }

// echo "calliing static variavle function <br/>";
// echo display() . "<br/>";
// echo display() . "<br/>";
// echo display() . "<br/>";
// echo display() . "<br/>";

// // output
// // calliing static variavle function
// // 1
// // 2
// // 3
// // 4
###################################Static properties ##########################################
#static $a=10
#self:: $a
#
#static $name
#function display($anyname)
#self::$name = $anyname;
#$obj->display("hello php");
##########################################################################################
// code 2 //defult function argument ke under ststic properetis kese use hota hai              
// class Father{
//     public static $a=10;
//     public function display(){      //defult argument
//         echo self:: $a;             //function ke under mai static propertic ko use karne ke iya self:: ke word ka use kare gaye.
//     }
// }

// $obj = new Father;
// $obj->display();

// output
// 10

// code 3 //function parameter ke under argument ko ststic propertis kese use hota hai
// class Father{
//     public static $name;
//     public function display($anyname){      //defult argument
//         self::$name = $anyname;
//         echo self::$name;             //function ke under mai static propertic ko use karne ke iya self:: ke word ka use kare gaye.
//     }
// }

// $obj = new Father;
// $obj->display("hello php");

// output
// hello php

###################################Static method(function) ##########################################
// class student{
//     public static function display()
//     {
//         echo "hello php";
//     }
// }

// student::display();         // method ko call karne ke liya  :: function_name ka use hota hai

// // output
// // hello php

############################ passing value the static method ############
// code 2 
class student{
    public static function display($num)
    {
        echo "hello php" . $num;
    }
}

student::display(7);  

// output
// hello php7


?>