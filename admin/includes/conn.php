<?php
	$conn = new mysqli('remotemysql.com', '6noE5I5vHn', '43isyV3Vkw', '6noE5I5vHn');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
