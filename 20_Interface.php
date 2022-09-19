<?php
/*
// syntex
interface interface_name{
    const properties
    method; //not use  information onlu declear, other cass(inheritance) information
}
*/

// example:
// interface Father
// {
//     const a=101;
//     public function disp();
// }

//--------------------- extance inheritanct ---------------------------
// 1. interface extancance  on interface
// 2. interface can inherit other interface using etend keyword
// 3. interface can not exdending class
// ex: one interface extending one interface

/*
syntex
interface interface name_1
{
    const properties;
    method;
}

interface interface_name2 extends interface_name1
{
    const properties;
    method;
}
*/
// programming

// interface Father{
//     const a=100;
//     function disp();        //information ko collect kare ga other interface se
// }
// interface Son extends Father{
//     const b=102;
//     function getvalue();
// }

//------------------------- one interface can extends more then one interface----------------------
/* syntex
interface Father
{

}
interface mother
{

}
interface son extends Father, mother
{

}
*/
// code:

// interface Father{
//     const a=100;
//     function disp();       
// }

// interface Mother{
//     const b=200;
//     function showvalue();        
// }

// interface Son extends Father, Mother{
//     const c=300;
//     function getvalue();
// }

//------------------------- Implement Class ----------------------
// one interface ->single create_function
// class implement an interface using "implement" keywor
// a claa does not implement all method (function)
// interface the class must be declear abstract
//------------------------- one interface can implement in a single class----------------------
/*
syntex
interface interface name_1
{
    const properties;
    method;
}

class class_anme implements interface_name1
{
    properties;
    method;
}
*/
// programming

// interface Father{
//     const mark=100;
//     public function disp();        //information ko collect kare ga other interface se
// }
// class Son implements Father{        //abstrack bhi use kar shak te hai class ke ja ga per
//     public function disp(){
//         echo Father::mark;
//     }
// }

// code 2
// interface Father{
//     const mark=100;
//     public function disp();             //abstract or class both use because other class colect a information
//     public function getvalue();         //abstract or class both use because other class colect a information
// }
// class Son implements Father
// {
//     public $a;
//     public function disp(){             //same method call hoga          
//         echo Father::mark;
//     }

//     public function getvalue(){             //public function getvalue(); is ko access kar ne ke liya use kiya hai     
//     }
// }
// // class ko object mai convert kar ke display kiya hai
// $obj=new Son;
// $obj->disp();

// // output
// // 100


// ---------------------multipal inheritance using interface--------------------
/*
syntex
class Father
{
    properties;
    method;
}

interface mother{
    const properties;
    method
}

class Son extend father implements mother{
    properties;
    method;
}
*/

// class Father{
//     public $sci =101;
// }

// interface mother{
//     const math=102;
//     public function disp(); //is information other class mai use hoga
// }

// class son extends Father implements mother{
//     public function disp(){
//         //notice point
//         echo $this->sci . "<br/>";
//         echo mother::math;
//     }
// }

// $obj = new Son;
// $obj->disp();

// output
// 101
// 102

// note: class ke data ko call karne liya-> 1. $this->sci 2. $obj = new Son;
//                                                           $obj->disp();

// interface ke data ko call karne ke 1. public function disp(); 2.  public function disp() "same other class use" 3. echo mother::math;
// 










?>