<?php 
session_start();
echo" <h1>Welcome ".$_SESSION['username']."</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <center>
    <fieldset>
        <legend>Register new Employee</legend>
        <form action="RegistrationController.php" method="POST">
        <label for="name">Name</label> <br>
        <input type="text" name="name" id="name"><br>
        <label for="name">User Name</label> <br>
        <input type="text" name="uname" id="uname"><br>
        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password"> <br>
        <label for="cPassword">Confirm Password</label> <br>
        <input type="password" name="cpassword" id="cpassword"><br>
        <label for="name">Company Name</label> <br>
        <input type="text" name="cname" id="cname"><br>
        <label for="email">Phone Number</label> <br>
        <input type="text" name="phone" id="phone"><br> <br>
        <button type="submit" >Register</button>
    </form>
    </fieldset>
    </center>
</body>
</html>