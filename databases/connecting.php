<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Connecting to a Database</title>
	
</head>

<body>

	<h1>Connecting to a Database</h1>
	
	<?php
	
	$host = 'localhost';
	$username = 'root';
	$password = 'password';
	$database = 'test_db';
	
	$connection = mysql_connect($host, $username, $password, $database) || exit(mysql_error());
	
	?>

</body>
</html>
