<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../model/style.css">
    <style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
    <center>
            <?php
        session_start();
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="minproject";
        //create connection..
        try{
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        if(mysqli_connect_error())
        {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
        }
        else{
            $sql="select id,name,email,usertype from users where id='".$_SESSION["id"]."' limit 1";
            $result=$conn->query($sql);
            if(mysqli_num_rows($result)==1)
            {
                echo "<table><tr> <th>Profile </th></tr>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr><td>ID:</td><td>" . $row["id"]. "</td> </tr><tr><td>Name</td><td>" . $row["name"]. "</td></tr><tr><td>Email</td><td>" . $row["email"]."</td></tr></tr><td>User Type</td><td>" . $row["usertype"]. "</td></tr>";
                    }
                    echo "<tr><td></td><td><a href='./home.php'>Go Home</a></td></tr>";
                    echo "</table>";
                
                exit();
            }
            else{
                echo"Wrong password";
            }
            $conn->close();
        }
?>

    </center>
</body>
</html>