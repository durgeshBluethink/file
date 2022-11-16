<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
 <title>Crud Operation</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
  <div class="container">

<!-- <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>  -->
<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">Useername</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
<?php

$q = "select * from `data` ";

$query = mysqli_query($conn,$q);
if($query){
while($row   = mysqli_fetch_array($query)){
  $id=$row['id'];
  $username=$row['username'];
  $email=$row['email'];
  $password=$row['password'];
  echo ' <tr>
  <th scope="row">'.$id.'</th>
  <td>'.$username.'</td>
  <td>'.$email.'</td>
  <td>'.$password.'</td>
  <td>
<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
<button class="btn btn-primary"><a href="post-delete.php?deleteid='.$id.' ?>" onclick="return confirm('Are You Sure ?')">Delete</a></button>

</td> 
</tr>';
}
}
?>
</tbody>
</table>
</div>
</body>
</html>