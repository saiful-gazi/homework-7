<?php
session_start();
if(!isset($_SESSION['login'])){
header("location:login.php");
}

$id=$_GET['id'];
$student_id=$_POST['student_id'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $depertment=$_POST['depertment'];
 $mobile=$_POST['mobile'];


$conn= mysqli_connect('localhost','root','','hw6');
$sql = "UPDATE students SET student_id='$student_id', name='$name',email='$email',depertment='$depertment',mobile='$mobile' WHERE id=$id";

if(mysqli_query($conn,$sql))
{
    header("location:index.php");
}
else{
    echo "<h2>Not Inserted</h2>";
}





?>