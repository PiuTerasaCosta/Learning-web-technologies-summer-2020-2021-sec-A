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
    font-size: 20px;
    padding: 10px;
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
            $sql="select * from users";
            $result=$conn->query($sql);
            if($result->num_rows > 0)
            {
                echo "<table><tr> <th>Users </th></tr>";
                echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>User Type</th></tr>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]."</td><td>" . $row["usertype"]. "</td></tr>";
                    }
                    echo "<tr><td></td><td></td><td></td><td><a href='./home.php'>Go Home</a></td></tr>";
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