<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<body>

    <table>
    <tr>
    <td>
    <?php
    for($i=0;$i<=2;$i++){	
        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br/>";
    }
    ?></td>
    <td><?php  
    $n = 4;
    for($i=4;$i>1;$i--){	
        for ($j=1; $j<$i; $j++){
            echo "$j";
        }
        echo "<br>";
    }
    ?></td>
    <td><?php 
    $num = 65; 
    $alpha = range('A', 'Z');  
    for($i=0;$i<3;$i++){   
    for($j = 0;$j<=$i;$j++ ){  
        $ch = chr($num);
            echo $ch." ";
            $num = $num + 1; 
        }  
        echo "<br>";  
    }  
    ?></td>
    </tr>
    </table>
</body>
</html>