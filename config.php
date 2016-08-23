<?php
//define constants for connection info
define("MYSQLUSER","jc336677");
define("MYSQLPASS","jc336677");
define("HOSTNAME","localhost");
define("MYSQLDB","jc336677");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>

