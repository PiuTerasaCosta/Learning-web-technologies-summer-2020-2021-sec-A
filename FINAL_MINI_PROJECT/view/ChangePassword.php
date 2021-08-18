<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    fieldset {
        margin-top: 10px;
        padding: 55px;
        background-color: white;
        block-size: 32rem;
        border: 2px solid;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<?php 
$oldpassword=$cPassword=$newpassword="";
session_start();
$id= $_SESSION["id"] ; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
		$oldpassword = $_POST['oldpassword'];
		$cPassword = $_POST['cPassword'];
        $newpassword = $_POST['newpassword'];
        if($cPassword==$newpassword )
        {
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
                $sql="select * from users where id='".$id."' AND password='".$oldpassword."' limit 1";
                $result=$conn->query($sql);
                if(mysqli_num_rows($result)==1)
                {
                    $sql = "UPDATE users SET password='".$newpassword."' WHERE id='".$id."'";
                    if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    header("refresh: 2; url = ../view/Profile.php");
                    } else {
                    echo "Error updating record: " . $conn->error;
                    }

                    exit();
                }
                else{
                    echo"Wrong password";
                }
                $conn->close();
            }
        }
    }
?>
<body>
    <div class="cp">
        <fieldset>
            <div class="right">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <form>
                        <div class="newpassword">
                            <h1>Change Password.</h1>
                            <!--Change password part 2-->
                            <div class="newPassword">
                                Current password: <input type="password" name="oldpassword">
                                <br><br>
                                <span style="color:Green">New password: </span> <input type="password" name="newpassword">
                                <span class="error"></span>
                                <br><br>
                                <span style="color:red">Retype password: </span> <input type="password"
                                    name="cPassword">
                                <span class="error"></span>
                                <br><br>
                            </div>
                            <hr>
                            <input type="submit" name="submit" value="Submit">
                        </div>
            </div>
            </form>
        </fieldset>
    </div>
    </div>
</body>

</html>