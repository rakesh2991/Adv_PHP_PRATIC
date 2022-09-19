<?php
// is mai 2 aalag aalag "block" bana ke call kar shak te hai.
// same class ke propertise ko dono block mai use kar shak te hai "herarchical_level" se
class Father
{
    public $a;
    public $b;
    function getvalue($x,$y){
        $this->a = $x;
        $this->b = $y;
    }
}

class Son extends Father
{   
    function add()                          //additional function
    {
        return $this->a + $this->b;
    }

    function display()
    {
        echo "value of A: $this->a <br/>";
        echo "value of B: $this->b <br/>";
        echo "Additions:" . $this->add();       //by defult function ko direct use kar shak te hai $this->add()

    }
}
//ab muje multiplay karna

class Daughter extends father
{
    function multi()                        //multipal function
    {
        return $this->a * $this->b;      //direct value ko call kar shak te hai
    }


    function display()
    {
        echo "value of A: $this->a <br/>";
        echo "value of B: $this->b <br/>";
        echo "multiplaction:" . $this->multi();
    }
}

//output code
$objadd = new Son;
$objmul = new Daughter;

$objadd->getvalue(10,20);
$objadd->display();
$objmul->getvalue(30,20);
$objmul->display();



// -------output
// value of A: 10
// value of B: 20
// Additions:30value of A: 30
// value of B: 20
// multiplaction:600
?>