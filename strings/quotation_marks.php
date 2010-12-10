<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Quotation Marks</title>
	
</head>

<body>

	<h1>Quotation Marks in PHP</h1>
	
	<?php
	
	/**
	 * PHP distinguishes between single quotes (' ') and double quotes (" "). Within double quotes, variables and special 
	 * characters are evaluated, then printed, rather than just printed. Special characters include \n, \r, \t etc.
	 */
	
	echo '<pre>';
	
	echo 'The quick brown fox jumped over the lazy dog.';
	
	echo "The quick brown fox\njumped over\n\t\tthe lazy dog";
	
	echo 'The quick brown fox\njumped over\n\t\tthe lazy dog';
	
	$fox = 'Tod';
	
	$dog = 'Copper';
	
	echo "The quick brown $fox jumped over the lazy $dog.";
	
	echo 'The quick brown $fox jumped over the lazy $dog.';
	
	echo '</pre>';
	
	/**
	 * Understanding this distinction will save you much frustrating debugging down the road.
	 */
	
	?>

</body>
</html>
