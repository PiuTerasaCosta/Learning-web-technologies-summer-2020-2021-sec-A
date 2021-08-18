<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../model/style.css">
</head>
<body>
    <fieldset>
        <legend>Registration</legend>
        <form action="../controller/RegistationControl.php" method="POST">
        <label for="id">ID</label> <br>
        <input type="text" name="id" id="id"> <br>
        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password"> <br>
        <label for="cPassword">Confirm Password</label> <br>
        <input type="password" name="cpassword" id="cpassword"><br>
        <label for="name">Name</label> <br>
        <input type="text" name="name" id="name"><br>
        <label for="email">Email</label> <br>
        <input type="text" name="email" id="email"><br>
        <label for="UserType">User Type [User/Admin]</label> <br>
        <select name="UserType" id="UserType">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select> <br>
        <button type="submit" class="btn_reg">Register</button>
    </form>
    </fieldset>
</body>
</html>
<script>
    
</script>