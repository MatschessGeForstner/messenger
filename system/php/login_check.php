<?php
    include("db_connect.php");
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	echo $username;

	if (mysqli_query($db, "SELECT * FROM users WHERE username = '$username' && password = md5('$password')"))
		{
		echo 'access';
		}
	else {
		echo 'denied';
		}					
?>
	








