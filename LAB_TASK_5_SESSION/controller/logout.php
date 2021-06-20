
<?php
	session_start();
	//session_destroy();
	unset($_SESSION['flag']);
	header('location: /Work/group/Lab5/view/login.php');
?>