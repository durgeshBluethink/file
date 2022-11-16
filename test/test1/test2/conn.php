<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbName   = "crud_test";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if (!$conn) {
    die(mysqli_error($conn));
}
?>