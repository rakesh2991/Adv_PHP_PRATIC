<?php

// 1. $this -> method

// class Mobile
// {
//     public $model;
//     function showodel($number)
//     {
//         $this->model = $number;
//         echo "model number: $this->model" . "<br/>";          // $this->model not space
//     }
// }
// // multipal company use kar shak te hai
// $samsung = new Mobile;
// $samsung -> showodel("SumPro");

// $Lg = new Mobile;
// $Lg -> showodel("LgMaxPro");


 //2.------------------- $this -> variable property = "a1";--------------------

 class Mobile
 {
    public $Model;
    function showmodel()
    {
        // varible function are not create to excuited
        echo $this->Model;
    }
 }
 $sumsung = new Mobile;
 $sumsung->Model= "a1";     //varibale properties to create a object 
 $sumsung->showmodel();

?>