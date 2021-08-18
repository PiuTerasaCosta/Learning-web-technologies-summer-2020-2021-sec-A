<?php
	session_start();
    $nameErr = $unameErr = $emailErr = $passwordErr = $cpasswordErr ="";
    $name = $uname = $cname= $phone = $password = $cpassword ="";
	$flag=0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
               $unameErr = "name is required";
			   $flag=1;
            }else {
               $name = test_input($_POST["name"]);
            }
            if (empty($_POST["uname"])) {
               $unameErr = "user name is required";
			   $flag=1;
            }else {
               $uname = test_input($_POST["uname"]);
            }
            if (empty($_POST["cname"])) {
               $unameErr = "Company name is required";
			   $flag=1;
            }else {
               $cname = test_input($_POST["cname"]);
            }
			if (empty($_POST["phone"])) {
               $emailErr = "phone is required";
			   $flag=1;
            }else {
               $phone = test_input($_POST["phone"]);
            }	
			if (empty($_POST["password"])) {
               $passwordErr = "password is required";
			   $flag=1;
            }else {
               $password = test_input($_POST["password"]);
			}
            if (empty($_POST["cpassword"])) {
               $cpasswordErr = "Confirm password is required";
			   $flag=1;
            }else {
               $cpassword = test_input($_POST["cpassword"]);
               if($cpassword!=$password)
               {
                $cpasswordErr = "Confirm password didn't match";
                $flag=1;
            }
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
header("refresh: 2;url = admin.php");
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

        $sql = "INSERT INTO employer (name, cname, phone,uname,password)
        VALUES ($name, $cname, $phone, $uname, $password)";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    header("refresh: 2; url = Showallemployee.php");
}

?>