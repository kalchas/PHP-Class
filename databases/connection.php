<?php

/**
 * This file provides the database connection and selects the database.
 */

$host = 'localhost';
$username = 'root';
$password = 'password';
$database = 'test_db';

$connection = mysql_connect($host, $username, $password);

if (is_resource($connection)) {

	if (! mysql_select_db($database, $connection)) {
		
		mysql_query("CREATE DATABASE $database;", $connection);
		
		mysql_select_db($database, $connection);
		
	}

	
} else {
	
	echo "Could not connect: " . mysql_error();
	
	exit();
	
}

?>
