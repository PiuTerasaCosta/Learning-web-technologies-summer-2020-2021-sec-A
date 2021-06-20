<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
   <div>
	<form method="post" action="../controller/password.php">
		<fieldset>
			<legend>Change Password</legend>
			<table>
                <tr>
					<td>Current Password</td>
					<td><input type="password" name="cpassword"></td>
				</tr>
                <tr>
					<td>New Password</td>
					<td><input type="password" name="npassword"></td>
				</tr>
				<tr>
					<td>Retype new Password</td>
					<td><input type="password" name="rpassword"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Edit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
    <div class="dashboard">
        <a href="./home.php">Home</a> <br>
        <a href="./viewProfile.php">View Profile</a> <br>
        <a href="./EditProfile.php">Edit Profile</a><br>
        <a href="./propic.php">Change Profile picture</a><br>
        <a href="./ChangePassword.php">Change Password</a><br>
        <a href="../controller/logout.php">logout</a> <br>
    </div>
</body>
</html>
<?php
	
	}else{
		header('location: login.php');
	}
?>