<?php
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    
    

    <title>Login</title>
  </head>
  <body>
    
<div class="container">
    
        <div class="col-md-6 col-md-offset-3">
           
          <?php if(isset($_SESSION['error'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Warning!</strong> Email Or Password Wrong.
            </div>
          <?php }?>
            
            <?php if(isset($_SESSION['reg_msg'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Success!</strong> <?php echo $_SESSION['reg_msg'];?>
            </div>
          <?php }?>
          
           <h1 class="mt-2">Student Login </h1>
           <hr>
            
            <form action="confirmlogin.php" method="POST">
                 
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required name="email" placeholder="Enter Emai"> 
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required name="password" placeholder="Enter Password"> 
                </div>
                
                <button type="submit" class="btn btn-outline-primary">Login</button>
                <a class="btn btn-link" href="registration.php"> Crete New Account</a> 
            </form>
            
        </div>
    
</div>
    
    <script src="js/jquery-slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php unset($_SESSION['error']);?>
<?php unset($_SESSION['reg_msg']);?>