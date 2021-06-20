<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
   <div>
	<form method="post" action="../controller/profile.php">
		<fieldset>
			<legend>Edit Profile</legend>
			<table>
				<tr>
					<td>Username</td>
                    <th><?=$_SESSION['user']['username']?></th>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
                    <th><?=$_SESSION['user']['password']?> </th>
                    <th><a href="./ChangePassword.php">Change Password</a><br></th>
				</tr>
				<tr>
					<td>Email</td>
                    <th><?=$_SESSION['user']['email']?> </th>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Type</td>
                    <th><?=$_SESSION['user']['type']?> </th>
                    <th>Type can not be changed</th>
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