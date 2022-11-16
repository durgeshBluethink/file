<!DOCTYPE html>
  <html>
<body>
<?php

$name=$_POST["name"]; 
$email=$_POST["email"]; 
$course=$_POST["Courses"]; 
$password=$_POST["userpassword"];

// Server name must be localhost
$servername = "localhost";

// In my case, user name will be root
$username = "root";

// Password is empty
$password = "root";
$dbname = "my";

// Creating a connection
$conn = new mysqli($servername,
			$username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failure: "
		. $conn->connect_error);
}

// Creating a database named geekdata
$sql = "insert into Users(name,email,course,password)values('$name','$email','$course','$password');";
if ($conn->query($sql) === TRUE) {
    echo "sucess";
	//header('Location: http://www.example.com/');
} else {
	echo "Error: " . $conn->error;
}

// Closing connection
$conn->close();

?>
</body>
</head>