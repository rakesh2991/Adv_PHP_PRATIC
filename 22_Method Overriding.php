<?php
// class Father{
//     function display(){
//         echo "super class";
//     }
//     class Son extends Father{
//     function display(){
//         echo "Son class";
//         }   
//     }
//     class Daughter extends father
//     {
//         function disp(){
//             echo "Daughter class";
//         }
//     }
// }

// only inherite method can be overridden.
// final and static cand not overriden. 
// the overriding method must have same argument list.

// -------------------code 1-------------------------
class Father{
    function disp(){                //pernet
        echo "super class ";        //second call ho rha hai
    }
}

class Son extends Father{           //child class
    function disp(){
        echo "Son classs<br/>";     //first call ho rha hai, son father ko override kare ga
    }
}


// $obj = new Son;
// $obj->disp();
// output
// Son classs

// both are access
$obj = new Son;
$obj->disp();
$obj = new Father;
$obj->disp();

// //output
// Son classs
// super class
?> 