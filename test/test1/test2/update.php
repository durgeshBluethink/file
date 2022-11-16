<?php
include 'conn.php';
$id=$_GET['updateid'];
$q="select*from `data` where id=$id";
$query=mysqli_query($conn,$q);
$row=mysqli_fetch_array($query);
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = "update `data` set  id='$id',name='$username',password='$password' where id=$id ";
   
    $query = mysqli_query($conn,$q);
    if($query){
     // echo "Data my succsefully";
     header('location:display.php');
    }
    else{
     die(mysqli_error($conn));
    }
   }

?>
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

    <form methed="POST">
    <div class="form-group">
    <label >Username: </label>
    <input type="text" class="form-control" placeholder="Enter your username" name="username" autocomplete="off" value=<?php
    echo $username;?>>
  </div>
  <div class="form-group">
    <label >Email: </label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email" autocomplete="off" value=<?php echo $email;?>>
    
  </div>
  <div class="form-group">
    <label >Password: </label>
    <input type="password" class="form-control" placeholder=" Enter your Password" name="password"autocomplete="off"value=<?php echo $password;?>>
  </div>
 
  <button type="submit" class="btn btn-primary" name="login">Update</button>
</form>
    </div>
  </body>
</html>