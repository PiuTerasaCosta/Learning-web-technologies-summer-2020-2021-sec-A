<?php
	session_start();
	if(isset($_POST['submit'])){
		$cpassword= $_POST['cpassword'];
		$npassword= $_POST['npassword'];
		$rpassword= $_POST['rpassword'];
		if($cpassword != '' && $npassword != '' && $rpassword != ''){
            if($cpassword== $_SESSION['user']['password'])
            {
                if($npassword==$rpassword)
                {
                    $_SESSION['user']['password']=$npassword;
			        header('location: ../view/viewProfile.php');
                }
                else{
                    echo "Retype Password...";
                }
            }
            else{
                echo "Wrong Password...";
            }
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}
?>