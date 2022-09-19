<?php
// 1.private "property or method" can be acsess only with "same class"

// class father
// {
//     private $a;                           //private property
//     public function diaplayparent()     //method
//     {
//         echo "parent function $this->a=30 ";     //create a direct value
//     }
// }

// $obje = new father;
// $obje-> diaplayparent();

// // output
// // parent function =30

// -------------------------------------------------
// 2. private property cannot ber access "outside class" or with "object"
// class father
// {
//     private $a;                           //private property
//     public function diaplayparent()     //method
//     {
//         echo "parent function $this->a=30 ";     //create a direct value
//     }
// }

// $obje = new father;
// $obje-> a=10;           //show error "private propertis ko use nhi kar shak te"

// OUTput
// Cannot access private property father

// -----------------------------------------------------
// 3.in "inheritace", child class cannot access "parent's private property or method"

// class father
// {
//     private $a=30;                                 //private property

//     class Son extends father
//     {
//         public function diaplayparent()              //method
//         {
//             echo "parent function $this->a=30 ";     //create a direct value
//         }
//     }
// }

// $obje = new father;
// $obje-> a=10;

// output`
// Parse error: syntax error, unexpected 'class' 
?>