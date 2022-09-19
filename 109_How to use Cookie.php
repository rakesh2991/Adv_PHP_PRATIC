<?php
$cookie_name = 'user_email';
if(isset($_REQUEST['Set'])){
    $cookie_value = $_REQUEST['email'];
    $cookie_expire = time()+60*60*24*2;
    setCookie($cookie_name, $cookie_value, $cookie_expire);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookies</h1>
    <form action="" name="myform" method="post">
     Email: <input type="email" name="email" id=""> <br>
     
     <input type="submit" value="Submit" name="Set">
    </form>

    <?php
    if(isset($_COOKIE[$cookie_name])){
        echo "Cookie name is " . $cookie_name . " and Value is " . $_COOKIE[$cookie_name] . "<br>";
    } else {
        echo "Cookie not set";
    }
    ?>
    
    <!-- edge://settings/siteData?search=cook             link -->
</body>
</html>


