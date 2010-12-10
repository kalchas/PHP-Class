<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Writing to a Flat File</title>
	
</head>

<body>

	<h1>Writing to a Flat File</h1>
	
	<?php
	
	$data = array(
	
		'John Smith'	=> '1200 Elm Street, Somewhere, USA',
		'Barak Obama'	=> '1600 Pennsylvania Avenue, Washington D.C., USA'
		
	);
	
	$dir = realpath(dirname(__FILE__) . '/storage_warehouse/');
	
	$handle = fopen($dir . 'storage.csv', 'c');
	
	
	
	fclose($handle);
	
	?>

</body>
</html>
