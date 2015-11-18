<?php
    include("db_connect.php");
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' && password = md5('$password')");
	$row = mysqli_fetch_object($result);
	if($row) {
		echo 'access';
	}
	else {
		echo 'denied';
	}		
?>