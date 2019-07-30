<?php
session_start();
if(!isset($_SESSION['login'])){
header("location:login.php");
}




$student_id=$_POST['student_id'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $depertment=$_POST['depertment'];
 $mobile=$_POST['mobile'];
 
$rand= rand(111,99999);
$image= 'uploads/' . $rand . $_FILES['image']['name'];
$upload= 'uploads/' . $rand . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $upload);


$conn= mysqli_connect('localhost','root','','hw6');
$sql = "INSERT INTO students VALUES(NULL,'$student_id','$name','$email','$depertment','$mobile','$image')";


if(mysqli_query($conn,$sql))
{   
    $_SESSION['success']=1;
    header("location:index.php");
}
else{
    $_SESSION['error']=1;
    header("location:insert.php");
}





?>