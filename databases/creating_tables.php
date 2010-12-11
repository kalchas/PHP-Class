<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Creating Tables</title>
	
</head>

<body>

	<h1>Creating Tables</h1>
	
	<?php
	
	require_once(realpath(dirname(__FILE__) . '/connection.php')); //This will provide a connection to the database.
	
	//This is sql, not PHP. If you don't completely understand it, that's ok, as long as you get the jist.
	$sql = 'CREATE TABLE IF NOT EXISTS addresses (
		
				`id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
				`fname` VARCHAR (255) NOT NULL,
				`lname` VARCHAR (255) NOT NULL,
				`street_address_1` VARCHAR (255) NOT NULL,
				`street_address_2` VARCHAR (255) NOT NULL,
				`city` VARCHAR (255) NOT NULL,
				`state` VARCHAR (2) NOT NULL,
				`added` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
		)';
	
	$query = mysql_query($sql, $connection);
	
	if ($query) {
		
		echo 'Table created successfully.';
	} else {
		
		echo 'Could not create the table : ' . mysql_error();
	}
	
	?>

</body>
</html>
