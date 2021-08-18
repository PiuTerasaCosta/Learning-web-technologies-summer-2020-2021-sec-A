<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id = $_POST['id'];
		$password = $_POST['password'];
		if($id != '' && $password != ''){
					$_SESSION['flag'] = 'true';
                    $_SESSION["id"]="$id";
					setcookie('flag','true',time()+300,'/');
					include '../model/userModel.php';
                     $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="minproject";
        //create connection..
        try{
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        if(mysqli_connect_error())
        {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
        }
        else{
            $sql="select * from users where id='".$id."' AND password='".$password."' limit 1";
            $result=$conn->query($sql);
            if(mysqli_num_rows($result)==1)
            {
                echo "Login Succesfull.";
                header("refresh: 2; url = ../view/home.php");
                exit();
            }
            else{
                echo"Wrong password";
            }
            $conn->close();
        }
		}else{
			echo "null value found...";
            header('refresh: 2; url = ../view/login.php');
		}
	}else{
		echo "invalid request...";
        header('refresh: 2; url = ../view/login.php');
	}
?>