<?php
//start session
// watch video full explan
session_start();

// set session variable crete methos
// $uname = 'rakerrsh';
// $_SESSION['username'] = $uname;
// $_SESSION['password'] = '123456';

// //Access Session Variable
echo $_SESSION['username'] . "<br>";
echo $_SESSION['password'] . "<br>";

// unset single variable
unset($_SESSION['username']);

//Unset variable (ek shat band karne ke liya)
session_unset(); 

session_destroy()           //deleted data 

//unset data ke server ko use karne deta hai
?>