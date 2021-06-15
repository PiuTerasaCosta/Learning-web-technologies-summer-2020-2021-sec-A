<?php

	
	if(isset($_POST['submit'])){

		$name = $_POST['myname'];
		

		if($name == "" ){
			echo "null submission";
		}else{
			echo $name;
		}

	}else{
		echo "invalid request";
	}
?>
<html>
<head>
	<title>Name Submission</title>
</head>
<body>
	<form method="post" action="name.php">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="myname" value=""> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>