<?php
//	$conn = new mysqli('localhost', 'root', '', 'apsystem');
$conn = new mysqli('remotemysql.com', '6noE5I5vHn', '43isyV3Vkw', '6noE5I5vHn');

	if ($conn->connect_error) {
	    die("Connection failed1: " . $conn->connect_error);
	}
	
?>
