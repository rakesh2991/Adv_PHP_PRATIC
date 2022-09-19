<?php
// syntex:- $object_name = new class_name


// class Mobile
// {
//     public $model;                    //create a property
//     function showmodel($number)        //create a function parameter ($number) 
//     {
//         $this->model = $number;         //access a class properties ke parameter ko
//         echo "model no: $this->model";
//     }
// }
// // only creata object in a class
// $sumsumg = new mobile;

#####################################################################################
 /*   object mai propertice ko access kare ne ke liya "->" is symbole ka use kare hai 
 how to access a call class
// access class member using object
//-------------varible-----------
// object_name -> varibe_name                      //variable mai class properties ke name ko use karte hai
$sumsumg-> model or $sumsumg-> model = "a1";        //cal kaene ke liya class properties ko use karu ga

// -------------method o call kare ke liya -> ---------------------
object_name -> method_name()                        //function se call karne ke liya
$sumsumg-> showmodel()              

// method wirh parameter list----                   //function ke papameter se call kar shak te
object_name -> method_name(parameter_list)
$sumsumg-> showmodel("a1");
*/
#####################################################################################


// ---------------------------------------start code----------


// php 4 and 5
// class Mobile
// {
//     var $model;                      //global keyword
//     function ShowModel($number)
//     {
//         global $model;               //access a globale keyword
//         $model = $number;                        //global key word mai function ke parameter ko use karu ga
//         echo "model number: $model" . "<br/>";
//     }
// }
// // class convert to object
// $lg = new mobile;
// $lg -> ShowModel('aa');                  //function ke argument mai parameter ko use kiya
// $levono = new mobile;
// $levono -> ShowModel('lelelele');
//  ===============================================================
// --------------------------------------------php 7-----------------------
#######################call a function method #########################
// class Mobile
// {
//     public $model;                    //create a property
//     function showmodel($number)        //create a
//     {
//         $this->model = $number;         //this -> ke shat mai "$" use nhi hota
//         echo "model no: $this->model" . "<br/>";
//     }
// }
// // creata object in a class 
// $sumsumg = new mobile; //class ko acces karne ke liya object ko create kare gaye
// //class ke under datamember ko acces karne ke liya method ka use kare ga
// // method ko use karne ke liya "->" 
// $sumsumg -> showmodel("a1");        //showmodel($number) number ke data use karu ga

// // // class convert to object
// $lg = new mobile;
// $lg -> ShowModel('aa');
// $levono = new mobile;
// $levono -> ShowModel('lelelele');

// OUTPUT
// model no: a1
// model no: aa
// model no: lelelele

################################ call a variable #####################################
// note:- bydefult function mai data acces kare ne ke liya class propertis {$sumsumg->model = "AB";} use kare gaye and function call kare gaye {$sumsumg->showmodel(); }
class Mobile
{
    public $model;                    //create a property
    function showmodel()                // by defult function  showmodel()
    {
        echo "model no: $this->model" . "<br/>";   //this keyword is use calss ke properety ko access karne ke liya
    }
}

$sumsumg = new Mobile;
$sumsumg->model = "AB";   //variable ke data declear kare gaye
$sumsumg->showmodel();    //by defult argument

// output
// model no: AB

?>