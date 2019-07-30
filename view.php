<?php 

session_start();
if(!isset($_SESSION['login'])){
header("location:login.php");
}
$id= $_GET['id'];
$conn= mysqli_connect('localhost','root','','hw6');
$sql= "SELECT *FROM students where id = $id";
$result = mysqli_query($conn,$sql);

$std= mysqli_fetch_assoc($result);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    
    

    <title>All View</title>
  </head>
  <body>
    
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="index.php" class="btn btn-info mt-5">Student List</a>
        </div>
        <div class="col-md-10">
           <h1 class="mt-2">Student Details</h1>
           <hr>
            <table class="table table-bordered  mt-3" >
                <tr>
                    <th >Student ID</td>
                    <td><?php echo $std['student_id']?></td>
                </tr>
                <tr>
                    <th>Student Name</td>
                    <td><?php echo $std['name']?></td>
                </tr>
                 <tr>
                    <th>Student Email</td>
                    <td><?php echo $std['email']?></td>
                </tr>
                 <tr>
                    <th>Depertment name</td>
                    <td><?php echo $std['depertment']?></td>
                </tr>
                 <tr>
                    <th>Student Mobile</td>
                    <td><?php echo $std['mobile']?></td>
                </tr>
                 <tr>
                    <th>Student Image</td>
                    <td><img src="<?= $std['image']?>" width="500" </td>
                </tr>
                  
                  
                   
                
            </table>
        </div>
    </div>
</div>
    
    <script src="js/jquery-slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>