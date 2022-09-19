<?php
//start session

session_start();

// set session variable crete methos
$uname = 'rakerrsh';
$_SESSION['username'] = $uname;
$_SESSION['password'] = '123456';

// //Access Session Variable
echo $_SESSION['username'] . "<br>";
echo $_SESSION['password'] . "<br>";

// ----------------------------------------------------
//set session variable
// $_SESSION['username'] = 'rakesh';
// $_SESSION['password'] = '123456';

// //Access Session Variable
// echo $_SESSION['username'] . "<br>";
// echo $_SESSION['password'] . "<br>";

// if(isset($_SESSION['username'])){
//     echo "Session Variable Set <br>";
// } else {
//     echo "Session Variable Not Set <br>";
// }


// location: All cookies and site data/ localhost locally stored data->PHPSESSID->Content(key:14f7fk47q4vlus0io3ijutbajj)  jo "temp" folder mai same hoga

?>