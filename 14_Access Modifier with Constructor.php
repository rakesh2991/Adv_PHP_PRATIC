<?php
// --------------------------1. public    //hellow print msg
// class father{
//     public function __construct()            //defult construct, function mai public use hogha public
//     {
//         echo "hello construct";             // nornal helow massage
//     }
// }

// $obj = new father

// output
// hello construct

// ---------------------------2. private on cass method work, but outer error


// ---------------------------3. protected in use  one child class in construct
// class Father
// {
//     public $a;               //public use hu aa hai
//     protected function __construct($x)          //function parameter ko procted kiya hai
//     {
//         echo "parant construct called ";
//         $this->a = $x;
//         echo $this->a;
//     }
//     //note: function 'procted' ko 'public propertis' ko access kar shak ta hai
// }

// class Son extends Father{
//     public $b;               //public
//     public function __construct($x, $y)     //public function compalsary hai, thabi object mai call hoga, private or protected se call nhi hoga
//     {
//         parent::__construct($x);             //parent calss ko call kare
        
//         $this->b =$y;
//         echo $this->b;
//     }
// }

// $obj = new Son(10,20);

//note: function 'procted' ko 'public propertis' ko access kar shak ta hai
//note: function ke parameter ko other parameter mai use kar shak te hai, below
// ex   protected function __construct($x) ,  public function __construct($x, $y), call karane ke liya  parent::__construct($x); is ka use hu aa hai
// ---------------------------stop--------------------
?>