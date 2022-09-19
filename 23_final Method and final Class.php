<?php
#final method and final class in php
#final keyword is use to create, final method method class
#A final method cannot be overridden in child class
#A final cass cannot be inherite, can not crete sub clss of a final class

// sam ja ne ke liya hai
// class father{               //final or non final ek he class ke under declear ho ga
//     function display(){
//         echo "your can override me because i am not final";
//     }

//     final function show(){
//         echo " i am final so you cannot override me";
//     }
// }

// class Son extends Father{
//     function display(){
//         echo "yes i overrided";
//     }
// }
// ---------------------------------final method---------------------------------

// code 1
// class Father{           
//     final function dis(){ //single "final" method inherite nhi karta hai "error show kare ga"                //pernet
//         echo "super class ";        
//     }
// }

// class Son extends Father{           //child class
//     function disp(){
//         echo "Son classs<br/>";     //first call ho rha hai, son father ko override kare ga
//     }
// }




// // code 2
// class Father{           //ek class ke under do method use thab ho ga jab jab muje inherite karna ho father class ko, or erroe ko show nhi kare ga 1. final or non_final, 
//     final function dis(){                //pernet
//         echo "super class ";        
//     }

//     function show(){               
//         echo "hello php ";       
//     }
// }

// class Son extends Father{           //child class
//     function disp(){
//         echo "Son classs<br/>";     //first call ho rha hai, son father ko override kare ga
//     }
// }

// --------------------------------final class-------same programmig method class-------------------------
// final class Father{                      //final class mai use hoga
//         final function dis(){                //pernet
//             echo "super class ";        
//         }
//     }
    
//     class Son extends Father{           //child class   //this line erroe shaow 
//         function disp(){
//             echo "Son classs<br/>";   
//         }
//     }


// code 2.
// final class Father{           //ek class ke under do method use thab ho ga jab jab muje inherite karna ho father class ko, or erroe ko show nhi kare ga 1. final or non_final, 
//     final function dis(){                //pernet
//         echo "super class ";        
//     }

//     function show(){               
//         echo "hello php ";       
//     }
// }

// class Son extends Father{           //child class
//     function disp(){
//         echo "Son classs<br/>";     //first call ho rha hai, son father ko override kare ga
//     }
// }

// note: final class Father :- final keyword class mai use karne se
// is block ko erreo show kare ga

// class Son extends Father{           //child class
//     //     function disp(){
//     //         echo "Son classs<br/>";     //first call ho rha hai, son father ko override kare ga
//     //     }

?>