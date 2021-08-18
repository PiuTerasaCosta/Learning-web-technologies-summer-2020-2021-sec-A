<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <fieldset>
        <legend>Login:</legend>
        <form action="loginController.php" method="POST">
            <table>
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="Password" id="Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">submit</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>