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

    
    

    <title>Insert</title>
  </head>
  <body>
    
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="index.php" class="btn btn-info mt-5">Student List</a>
        </div>
        <div class="col-md-10">
           <h1 class="mt-2">Edit Student </h1>
           <hr>
            
            <form action="update.php?id=<?php echo $id?>" method="POST">
                  <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="number_format" required class="form-control"  name="student_id" placeholder="Enter Student ID" value="<?php echo $std['student_id']?>">  
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" required name="name" placeholder="Enter Name" value="<?php echo $std['name']?>"> 
                </div>
                
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" required name="email" placeholder="Enter Emai" value="<?php echo $std['email']?>"> 
                </div>
                
                <div class="form-group">
                    <label for="name">Depertment</label>
                    <input type="text" class="form-control" required name="depertment" placeholder="Enter Depertment Name" value="<?php echo $std['depertment']?>"> 
                </div>
                
                <div class="form-group">
                    <label for="name">Mobile</label>
                    <input type="number_format" class="form-control" required name="mobile" placeholder="Enter Mobile No" value="<?php echo $std['mobile']?>"> 
                </div>
                
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" required name="image" placeholder="Enter Mobile No"> 
                </div>
                
                
                <button type="submit" class="btn btn-outline-primary">Edit</button>
            </form>
            
        </div>
    </div>
</div>
    
    <script src="js/jquery-slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>