<?php  
//session is a used to manage information across difference page
session_start();  //to start session.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../model/style.css">
</head>
<body >
    <center>
    <?php
    include '../controller/homeControl.php';
    $style = "";
    if($_SESSION["usertype"]!="admin")
    {
        $style = "style='display:none;'";
    }
    ?>
    </center>
    <div class="dashboard" id="dashboard">
        <a href="./Profile.php" >Profile</a> <br>
        <a href="./ChangePassword.php" >Change Password</a> <br>
        <a href="./Users.php" <?php echo $style;?>>View Users</a> <br>
        <a href="">Logout</a> <br>
    </div>
</body>
</html>
