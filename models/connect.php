<?php
	
	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "hms_db";

	$con = new MySQLi($server, $user, $pass, $dbname);

	if ($con->connect_error) 
		echo "Error: ".$con->connect_error;

?>