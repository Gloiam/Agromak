<?php
require_once "config.php";
session_start();
$user =$_POST["username"];

$pass =$_POST["password"];
$results= mysqli_query($conn,"select * from user where username= '$user'  and password ='$pass' ");
$row=mysqli_fetch_array($results);
// handling usertypes
$type =$row["role"];
if($type =="farmer"){
    $user=$_SESSION['username'];
    $pass=$_SESSION['password'];
    header("location:view_registration.php");
}
else if($type =="customer"){
    $user =$_SESSION['username'];
    $pass =$_SESSION['password'];
    header("location:view_product.php");
}
else {
    header("location: index.php");
}
?>
