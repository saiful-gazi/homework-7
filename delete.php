<?php 

session_start();
if(!isset($_SESSION['login'])){
header("location:login.php");
}
$id=$_GET['id'];
//image delete //
$conn= mysqli_connect('localhost','root','','hw6');
$sql= "SELECT * FROM students WHERE id ='$id'";
$result= mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);

$image_location= $data['image'];

if(file_exists($image_location)){
    unlink($image_location);
}
   
//image delete end//

$conn= mysqli_connect('localhost','root','','hw6');
$sql= "DELETE FROM students where id = $id";
if(mysqli_query($conn,$sql)){
    header("location:index.php");
}
   else{
       echo "Oh! Not Deleted";
   }



?>