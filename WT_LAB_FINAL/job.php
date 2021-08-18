<?php
	session_start();
    $nameErr = $unameErr = $emailErr = $passwordErr = $cpasswordErr ="";
    $cname= $jobtitel= $joblocation= $salary ="";
	$flag=0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["cname"])) {
               $unameErr = "cname is required";
			   $flag=1;
            }else {
               $cname = test_input($_POST["cname"]);
            }
            if (empty($_POST["jobtitel"])) {
               $unameErr = "jobtitel is required";
			   $flag=1;
            }else {
               $jobtitel = test_input($_POST["jobtitel"]);
            }
            if (empty($_POST["joblocation"])) {
               $unameErr = "joblocation name is required";
			   $flag=1;
            }else {
               $joblocation = test_input($_POST["joblocation"]);
            }
			if (empty($_POST["salary"])) {
               $emailErr = "salary is required";
			   $flag=1;
            }else {
               $salary = test_input($_POST["salary"]);
            }	
    }
	else{
		echo "invalid request...";
	}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($flag==1){
    echo"Employee not addded";
header("refresh: 2;url = employee.php");
}
else{

        $host="localhost";
        $username = "root";
        $password = "";
        $dbname = "labfinal";

        // Create connection
        $conn = new mysqli($host, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO job (cname, jobtitel, joblocation,salary)
        VALUES ($cname, $jobtitel, $joblocation, $salary)";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    header("refresh: 2; url = employee.php");
}

?>