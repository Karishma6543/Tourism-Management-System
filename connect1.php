<?php
$servername = "localhost";
$username = "root";

$db = "project";
// Create connection
$conn = mysqli_connect($servername, $username, $db);
	$firstName = $_POST['userName'];
	$password = $_POST['password'];

	// Database connection

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(userName, password) values(?, ?)");
		$stmt->bind_param("ss", $userName, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Successful login...";
		$stmt->close();
		$conn->close();
	}
?>