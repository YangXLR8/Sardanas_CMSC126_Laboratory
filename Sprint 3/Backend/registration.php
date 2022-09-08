<?php

session_start();

header('location:user-signUp.html');

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userregistration');

$name = $_POST['name'];
$con_num = $_POST['con_num'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$s = " select * from usertable where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    echo" Email is already used by another account";
}else{
    $reg= " insert into usertable(name, con_num, email, pass) values ('$name', '$con_num', '$email' , '$pass')";
    mysqli_query($con, $reg);
    echo"Registration Successful";
    header('location:shop.html');
}
?>