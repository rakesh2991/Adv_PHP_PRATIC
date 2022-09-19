<?php
// class father
// {
//     public $a;
//     public function disp()                       //public function
//     {
//         echo "parent function $this->a";
//     }
// }

// $obj= new father;
// $obj->a = 10;
// $obj->disp();

// in use a inheritance (dono mai same value access karan hai)

class Father
{
    public $a;
    public function displayparent()                 //public function "defult" 
    {
        echo "parent function called $this->a";      //parameter mai variable nhi bana hai
    }
}

class Son extends Father
{
    public function displaychild($x)                  //public function "parameter"
    {       
        $this->a = $x;                                 //declear hu aa hai $x->a mai aasign kiya hai       
        echo "child value is: $this->a <br/>";
        $this->displayparent();                 //function bhi cal karta hai "->" arrow
    }
}

$obj = new Son;
$obj-> displaychild(10);        //dono mai value call mai

// output
// child value is: 10
// parent function called 10









?>