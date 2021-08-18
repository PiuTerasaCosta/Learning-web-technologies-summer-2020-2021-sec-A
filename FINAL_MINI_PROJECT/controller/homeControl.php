<?php  
    if(isset($_SESSION["id"])){  
        $id= $_SESSION["id"] ;   
        $usertype=$_SESSION["usertype"] ;
        include '../model/userModel.php'; 
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
            $sql="select name,usertype from users where id='".$id."' limit 1";
            $result=$conn->query($sql);
            if(mysqli_num_rows($result)==1)
            {
                while($row = $result->fetch_assoc())
                {
                    $_SESSION["usertype"]=$row["usertype"];
                    return $row["name"];
                }
                
                exit();
            }
            else{
                echo"Wrong password";
            }
            $conn->close();
        }  
        echo "<h1>Welcome ". $name."! <br></h1>";//"using session from registration.php
    }
    else{
        echo "Login please";
    }
?>