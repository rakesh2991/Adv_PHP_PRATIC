<?php
// question: sum karna hai 3 number ko
// multi-level inheritance

// 1. a or b ke liya properties ko create kare gaye
class Father
{
    public $a;
    public $b;
    function getvalue($x, $y)       //function parameter hai
    {
        $this->a = $x;
        $this->b = $y;
    }
}

//2. c ke properties k set kare gaye
class Son extends Father
{
    public $c = 3;                  //differnt properties
    public $sum;
    function add()                  //defult function
    {
        $this->sum = $this->a + $this->b + $this->c;  //aaase bhi likha ja shak ta hai
        return $this-> sum;                            //returen value ko call karta hai
    }
}

class GrandSon extends Son{
    function display()
    {
        echo "value of A: $this->a <br>";
        echo "value of b: $this->b <br>";
        echo "value of c: $this->c <br>";   //aasha bhi kar shak te hai: "c" ke liya direct properties k acces kiya hai
        echo "value of sum:" . $this->add();    //difult function ko bhi call kar shak te hai.
    }
}

$obj = new GrandSon;
$obj->getValue(10, 20);     //class Son ke  getvalue($x, $y) ke argument mai data dale gaye
$obj->display();            //defult argument se call kar ye gaye

?>