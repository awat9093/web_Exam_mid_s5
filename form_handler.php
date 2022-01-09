<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	if (isset($_POST["frm"])) {
		$email = $_POST["gmail"];
		$password = $_POST["pass"];
		if(strlen($password)> 8 && strlen($password) < 16 ){

		echo "password: ".$password;

	}else{
		echo "your password not btween 8 and 16 charectrers";
	}
	    echo "<br>";
		echo "email: ".$email."<br>";
		
		if (isset($_POST['color'])) {
        $colors=$_POST['color'];
		foreach ($colors as $col) {
		echo "favorite color is ";
		echo $col."<br>";
	}
    }else{

		echo "no favorite color!";
	}

	echo '<script>alert("Welcome ")</script>';
			
		

	}


	else
	{
		header('location:c.html');

	}

	?>

</body>
</html>