<?php
	$email = $_POST['email'];
	$servername = "localhost";
	$username = "username";
	$password = "";
	$dbname = "user";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	if($email == null){
		echo 'invalid data';
	}else{
		$sql = "INSERT INTO user (email)
		VALUES ('$email')";

		if ($conn->query($sql) === TRUE) {
		echo "Subscribe successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	}
	$conn->close();
?>

