<?php
	session_start();
    $idErr = $unameErr = $emailErr = $passwordErr = $cpasswordErr ="";
    $id = $uname = $email = $password = $cpassword = $type="";
	$flag=0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
               $unameErr = "user name is required";
			   $flag=1;
            }else {
               $uname = test_input($_POST["name"]);
            }
            if (empty($_POST["id"])) {
               $idErr = "user ID is required";
			   $flag=1;
            }else {
               $id = test_input($_POST["id"]);
            }
			if (empty($_POST["email"])) {
               $emailErr = "email is required";
			   $flag=1;
            }else {
               $email = test_input($_POST["email"]);
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
		    $type= $_POST["UserType"];
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
echo $unameErr;
echo $emailErr;
echo $cpasswordErr;
echo $passwordErr;
header("refresh: 2; url = ../view/Registration.php");
}
else{
    require_once '../model/userModel.php';

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
            $SELECT= "SELECT name From users Where name=? Limit 1"; 
            $INSERT ="INSERT Into users (id,name,password,email,usertype)values(?,?,?,?,?)";
            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param('s',$name);
            $stmt->execute();
            $stmt->bind_result($name);
            $stmt->store_result();
            $rnum=$stmt->num_rows;
            if($rnum==0)
            {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssss",$id,$name,$password,$email,$usertype);
                $stmt->execute();
                echo"Registration Done";
                echo"";
            }
            else{
                echo"Already an account registard by this mail. New mail id requiared";
            }
            $stmt->close();
            $conn->close();
        }
    
    header("refresh: 2; url = ../view/login.php");
}

?>