<?php
// class Father                            //parent
// {
//     function __construct()              //defult fuction construct
//     {
//         echo "<br> paraent construct call";
//     }
// }

// //__construct method call a parent to chlid class excuited
// class son extends father                //child
// {
//     // isko likhana he perta hai,
// }

// $obj = new son();

// echo "<br> child construct call";

// print a both data parent to child class
// output 
// paraent construct call
// child construct call

// ---------------------------------------------------------------------------
// note: secound class construct ko use kare ke liya "parent::" use kaena perata hai (father) hai

// class Father
// {
//     function __construct()
//     {
//         echo "parent construct called";
//     }
// }

// class Son extends Father                //creata a cass Son
// {
//     function __construct()  
//     {
//         parent::__construct();               //  parent:: -> father class ke data ko acces karta hai       
//         echo "<br>child construct called";

//     }
// }

// $obj = new Son();

// // output
// // parent construct called
// // child construct called

// -------------parameter construct-----------------
class Father
{
    public $a;
    function __construct($x)                    //parameter function create
    {
        echo "<br>parent construct called ";
        $this->a = $x;
        echo $this->a;
    }
}

class Son extends Father
{
    public $b;
    function __construct($x, $y)
    {
        parent:: __construct($x);
        echo "<br/>child constructor called ";
        $this->b = $y;
        echo $this->b;
    }
}

$obj = new Son(10, 20);

// // output
// // parent construct called 10
// // child constructor called 20


?>