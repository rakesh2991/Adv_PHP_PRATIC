<?php

// clas syntex
/*
class class_name
{
    var $variable_name;         //Data member/ Property /global variable (php 4ya 5 mai he bol te hai)
    var $variable_name;
 
    function methon_name()
    {
        body of method          
    }

    function methon_name(Parameter_List)
    {
        body of method
    }

} 

*/

// php 4 and 5
         //old method
// class Mobile
// {
//     var $model;  //globel variable  or properties

//         function showmodel($number)     //model number dekhane ke liya
//         {
//             //function ke under muje "model" ke properties ko access karna ke liya 
//             // "global key word ka use hoga
//             global $model;                      //"class properties" ko use karne ne ke liya "global" keyword ka use karte hai
//             $model = $number;
//             echo "model number: $number";
//         }
// }

// php 7

class Mobile
{
    public $model;      //property 
    
        function showmodel($number)
        {
            //function ke under muje "model" ke properties ko access karna ke liya 
                // "$this-> key word ka use hoga
            $this-> model = $number;                                 //this keyword is use calss ke properety ko access karne ke liya
            //print kare ne liya "this->model" ka use hota hai
            echo "model number: $this->model ";    
        }    
}


// can not assign
// public $price=10+20;public $price=10+20;
// public $price="rak"."sha";

?>