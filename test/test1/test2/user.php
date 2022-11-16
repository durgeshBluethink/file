<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Welcome Crud Operation!</title>
  </head>
  <body>
    <h2 class="text-center my-5">Welcome bluethink</h2>
    <div class="container my-5  " >

    <form method="post">
        <div class="form-group">
        <label >Username: </label>
        <input type="text" class="form-control" placeholder="Enter your username" name="username" autocomplete="off">
    </div>
    <div class="form-group">
        <label >Email: </label>
        <input type="email" class="form-control"  placeholder="Enter email" name="email" autocomplete="off">
        
    </div>
    <div class="form-group">
        <label >Password: </label>
        <input type="password" class="form-control" placeholder=" Enter your Password" name="password"autocomplete="off">
    </div>
    
    <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>

<?php
include 'conn.php';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
     $q = " INSERT INTO `data`(`username`, `email`,`password`) VALUES ( '$username', '$email','$password' )";
   
    $query = mysqli_query($conn,$q);
    if($query){
      //echo "Data my succsefully";
     header('location:display.php');
    }
    else{
     die(mysqli_error($conn));
    }
   }

?>
    </div>
  </body>
</html>