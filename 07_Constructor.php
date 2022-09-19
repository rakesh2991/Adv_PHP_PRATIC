<?php
/*
A constructor allows you to initialize an object's properties upon creation of the object.


If you create a __construct() function, PHP will automatically call this function 
when you create an object from a class.

Notice that the construct function starts with two underscores (__)!
*/
           
// class Student
//    {
//         function __construct()
//         {
//          echo "construct call";   
//         }
//    }
// $stu = new student; //object ke under parameter ko access kar te hai


// -----------------------------type of __construct------------------
//---------------------- 1. default __construct ------------------------


// class Student
//    {
//       // defult constuct
//    }
// $stu = new student;                  //defult mai direct call hota hai


//----------------------- 2. parameterized __construct-------------------

// class Student
//    {
//     public $roll;
//         function __construct($number)                    //parameter construct use
//         {
//             echo "parameter constructure call <br>";
//             $this->roll = $number;
//             echo $this->roll;
//         }
//    }
// //create a object in a class
// $stu = new Student(10000); //object ke under parameter ko access kar te hai
// // construct mai class ko use karte

// -----------------------multipal parameter------------------
class Showroom
   
   {
    public $car;
        function __construct($color)
        {
            echo "parameter constructure call <br>";
            
            $this->car = $color;
            echo $this->car;
        }
   }
$cars = new Showroom("red"); //method or property ko call nhi kar na perta hai
$cars = new Showroom("red1"); 
$cars = new Showroom("red2"); 
$cars = new Showroom("red3"); 
?>