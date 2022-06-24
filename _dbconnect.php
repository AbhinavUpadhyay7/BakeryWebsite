
<?php

$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(username, password) values(?,?)");
		}if($conn){
	die("Error".mysqli_connect_error);
}

?>