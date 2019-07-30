<?php
session_start();
if(!isset($_SESSION['login'])){
header("location:login.php");
}

$conn= mysqli_connect('localhost','root','','hw6');
$sql= "SELECT *FROM students";
$result = mysqli_query($conn,$sql);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    
    

    <title>Insert</title>
  </head>
  <body>
    
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="index.php" class="btn btn-info mt-5">Student List</a>
        </div>
        <div class="col-md-10">
          
          <?php if(isset($_SESSION['error'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Warning!</strong> Student Not Added successfully .
            </div>
          <?php }?>
          
           <h1 class="mt-2">Add New Student </h1>
           <hr>
            
            <form action="store.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="number_format" required class="form-control" name="student_id" placeholder="Enter Student ID">  
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" required name="name" placeholder="Enter Name"> 
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required name="email" placeholder="Enter Emai"> 
                </div>
                
                <div class="form-group">
                    <label for="depertment">Depertment</label>
                    <input type="text" class="form-control" required name="depertment" placeholder="Enter Depertment Name"> 
                </div>
                
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="number_format" class="form-control" required name="mobile" placeholder="Enter Mobile No"> 
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" required name="image" placeholder="Enter Mobile No"> 
                </div>
                
                
                <button type="submit" class="btn btn-outline-primary">Insert</button>
            </form>
            
        </div>
    </div>
</div>
    
    <script src="js/jquery-slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php unset($_SESSION['error']);?>