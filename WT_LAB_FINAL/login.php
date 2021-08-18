<?php
session_start();
$userNameErr = $passErr = "";
$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["username"]=="admin"&&$_POST["Password"]=="admin"){
        header('location:admin.php');
        $_SESSION['username'] = "Admin";
        $_SESSION['flag'] = 'true';

    }
    else{
            if (empty($_POST["username"])) {
                $userNameErr = "UserName is required";
            } else {
                $username=$_POST["username"];
            }
            
            if (empty($_POST["Password"])) {
                $passErr = "Password is required";
            } else {
                $Password=$_POST["Password"];
            }
            $_SESSION['flag'] = 'true';
            $_SESSION['username'] = $username;
            $host = "localhost";  
            $user = "root";  
            $password = '';  
            $db_name = "labfinal";  
            
            $con = mysqli_connect($host, $user, $password, $db_name);  
            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            }  
            else{
                    $sql = "select *from login where username = '$username' and password = '$password'";  
                    $result = mysqli_query($con, $sql);  
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count = mysqli_num_rows($result);  
                    
                    if($count == 1){  
                        echo "<h1><center> Login successful </center></h1>";  
                        header("refresh: 2; url = employee.php");
                    }  
                    else{  
                        echo "<h1> Login failed. Invalid username or password.</h1>";  
                    }     
            }
    }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>