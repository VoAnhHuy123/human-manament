<?php
//	$conn = new mysqli('localhost', 'root', '', 'apsystem');
$conn = new mysqli('remotemysql.com', 'MBrwe2KOAD', 's0gXVIzNks', 'MBrwe2KOAD');

	if ($conn->connect_error) {
	    die("Connection failed1: " . $conn->connect_error);
	}
	
?>
