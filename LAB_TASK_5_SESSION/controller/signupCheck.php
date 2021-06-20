<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];
		$type= $_POST['type'];
		if($username != '' && $password != '' && $email != ''){
			$user =['username'=> $username, 'password'=>$password, 'email'=>$email, 'type'=>$type];
			$_SESSION['user'] = $user;
			header('location: ../view/login.php');
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>