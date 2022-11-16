<?php

include 'conn.php';
if(isset($_GET['deleteid'])){
$id = $_GET['deleteid'];
$q = " DELETE FROM `data` WHERE id = $id ";
$query = mysqli_query($conn,$q);
if($query){
header('location:display.php');
}
else{
    die(mysqli_error($conn));
}
}
?>