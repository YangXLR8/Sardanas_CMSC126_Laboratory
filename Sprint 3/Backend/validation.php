<?php

session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userregistration');

$email = $_POST['email'];
$pass = $_POST['pass'];
$s = " select * from usertable where email = '$email' && pass = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    header('location:user-login.html');
}else{
    $_SESSION['username'] = $name;
    echo"Welcome!";
    header('location:shop.html');
}

?>