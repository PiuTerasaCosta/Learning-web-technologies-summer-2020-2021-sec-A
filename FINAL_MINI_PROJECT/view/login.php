<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../model/style.css">
</head>
<body>
    <fieldset>
        <legend>LOGIN</legend>
        <form action="../controller/loginControl.php" method="POST">
        <label for="id">ID</label> <br>
        <input type="text" name="id" id="id"> <br>
        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password"> <br> <br>
        <input type="checkbox" name="rm" id="rm"> Remember Me
        <hr>
        <button type="submit" class="btn_login">Login</button>
        <a href="./Registration.php">Register</a>

    </form>
    </fieldset>
</body>
</html>