<?php
//1. Cannot access protected property or method outside class and object

// class Father 
// {
//     protected $a;                            protected property
//     public function displayparent()
//     {
//         echo "parent functiopn $this->a";
//     }
// }

// $obj = new Father;
// $obj->a = 30;       //cannot acced outside class and object

// -------output--------
//2. Uncaught Error: Cannot access protected property Father


// protected property or class can be accessed within "same class" and,
// class Father                                   //class
// {
//     protected $a;                              //proctected protect
//     public function displayparent()
//     {
//         $this->a = 30;
//         echo "parent function $this->a";
//     }
// }

// $obj = new Father;                             //can be access same class name
// $obj->displayparent();

// output:
// parent function 30

//3. child class can access parent's or grandparent's protected property or method
//  //code1
// class Father                //parent class
// {
//     protected $a=30;            //propert
// }

// class Son extends father            //child class
// {
//     public function displaychild()  //method
//     {
//         echo $this->a;
//     }
// }
// $obj = new Son;
// $obj->displaychild();               //access method

//  //code2
class Father
{
    protected $a=30;
}

class Son extends Father
{
    protected $b=20;
}

class Grandson extends Son
{
    public function displaygrandson()
    {
        echo $this->a . "<br/>" . $this->b;
    }
}

$obj= new Grandson;
$obj-> displaygrandson();

// output
// 30
// 20
?>