<?php 

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$con_pass=$_POST['confirm_password'];

if($pass != $con_pass){
session_start();
$_SESSION['error_msg'] ="Password And Confirm Password Did not Match";
header("location:registration.php");
}

$conn= mysqli_connect('localhost','root','','hw6');

$sql= "INSERT INTO users VALUES(NULL,'$name','$email','$pass')";
if(mysqli_query($conn,$sql)){
    session_start();
$_SESSION['reg_msg'] ="Registration Successfully! Please Login";
header("location:login.php");
}

?>
