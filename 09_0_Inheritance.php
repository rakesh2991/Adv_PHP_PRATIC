<?php
// declaration og child class
// class childName extends parentclassname
// {
//     member of child class
// }


//single inheritance

class Father                                           //parant class
{
    public $a;                                          //data member/ properties
    public $b;      
    function getvalue($x, $y)                           //parameter method or parameter member function
    {       
        $this->a = $x;
        $this->b = $y;
    }
}
// is data ko other class use kare ji same hai
class son extends Father                                //child class
{
    function display()                                  //method or member function
    {
        echo "value of a: $this->a <br/>";
        echo "value of b: $this->b <br/>";
    }
}

$obj = new son;
$obj-> getvalue(10,20);     //function "parameter" mai "argument" ke value set karu ga
$obj->display();            //parameter defult call hooga

// output
// value of a: 10
// value of b: 20


?>