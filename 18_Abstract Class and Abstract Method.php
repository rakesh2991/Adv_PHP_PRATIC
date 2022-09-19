<?php
// abstract class Father{
//     function disp(){
//         echo "name method";
//     }
// }

// $obj = new Father;

// output
// Uncaught Error: Cannot instantiate abstract class Father

// ---------------------------------------

abstract class Father{
    function disp(){
        echo "normal method";
    }
    //abstract function method declear karta hai information ko dusare function se "collect" karne ke liya ex- public function absmethod()
    abstract function absmethod();  
}

class Son extends Father{
    // abstract function absmethod ke information ko declear karu ga
    public function absmethod(){        // abstract function ke method ka dono side same hoga
        echo "abstract mrthod<br>";         //informarion
    }
}

$obj = new Son;
$obj->absmethod();

// output
// abstract mrthod
?>