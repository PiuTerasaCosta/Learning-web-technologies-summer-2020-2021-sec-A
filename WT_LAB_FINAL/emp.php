<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job</title>
</head>
<body>
    <fieldset>
        <legend>Add JOB</legend>
        <form action="jobController.php" method="POST">
        <label for="name">Job title</label> <br>
        <input type="text" name="name" id="name"><br>
        <label for="name">job location</label> <br>
        <input type="text" name="jlocation" id="jlocation"><br>
        <label for="name">Company Name</label> <br>
        <input type="text" name="cname" id="cname"><br>
        <label for="email">salary</label> <br>
        <input type="text" name="salary" id="salary"><br> <br>
        <button type="submit" >Add</button>
    </form>
    </fieldset>
</body>
</html>