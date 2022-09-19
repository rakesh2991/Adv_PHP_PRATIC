<?php
####################################################
# const mark = 101;
#inside class using self keyword : self::mark;
#outside class using self keyword : classname::mark;
#############################

class father{
    const mark = 101;   // $ sing niot use
    function disp(){
        echo self:: mark;
    }
}

$obj =  new father;
$obj->disp();

// output
//101



?>