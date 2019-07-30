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

    
    

    <title>All View</title>
  </head>
  <body>
    
<div class="container">
    <div class="row">
        <div class="col-md-2">
           
          
            <a href="insert.php" class="btn btn-info mt-5">Add Student</a>
        </div>
        <div class="col-md-10">
          
          
          
          
          <?php if(isset($_SESSION['success'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Success!</strong> Student Added successfully .
            </div>
          <?php }?>
          <a  class="btn btn-warning float-right mt-3" href="logout.php">Log Out</a>
          
           <h1 class="mt-2">Student List</h1>
           <hr>
           
          
            <nav class="navbar navbar-light bg-light justify-content-between">
              <a class="navbar-brand"></a>
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </nav>
            
            <table class="table table-bordered table-hover mt-3">
                <thead>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Depertment</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Action</th>
                </thead>
                
                <tbody>
                   <?php while($row = mysqli_fetch_assoc($result)) {?>    
                    <tr>
                        <td><?= $row['student_id']?></td>
                        <td><?= $row['name']?></td>
                        <td><?= $row['email']?></td>
                        <td><?= $row['depertment']?></td>
                        <td><?= $row['mobile']?></td>
                        
                        <td> <img src="<?= $row['image']?>" width="100" </td>
                            
                        <td><a href="view.php?id=<?php echo $row['id'];?>" class="btn btn-info">View</a> </td>
                        <td><a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a> </td>
                        <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</a> </td>
                    </tr>
                   <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
    <script src="js/jquery-slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php unset($_SESSION['success']);?>