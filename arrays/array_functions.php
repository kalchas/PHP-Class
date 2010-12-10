<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Array Functions</title>
	
</head>

<body>

	<h1>Array Functions</h1>

	<?php
	
	/**
	 * Looping is fine, but it can be a bit of a bludgeon when it comes to dealing with arrays. PHP provides 77 functions for 
	 * processing arrays, and, in general, it's a better choice to use a function rather than a loop in array processing.
	 */
	
	$week = array(
		
		'Saturday',
		'Monday',
		'Wednesday',
		'Friday',
		'Thursday',
		'Tuesday',
		'Sunday'
		
	);
	
	echo '<h2>Out of Order Week</h2>';
	
	echo '<pre>';
	
	print_r($week);
	
	echo '</pre>';
	
	//Sorting
	
	//asort()
	asort($week);
	
	echo '<h2>Week after asort()</h2>';
	
	echo '<pre>';
	
	print_r($week);
	
	echo '</pre>';
	
	//sort()
	sort($week);
	
	echo '<h2>Week after sort()</h2>';
	
	echo '<pre>';
	
	print_r($week);
	
	echo '</pre>';
	
	//Sorting by key
	$associative_week = array(
		
		'Day 7'	=> 'Saturday',
		'Day 2'	=> 'Monday',
		'Day 4'	=> 'Wednesday',
		'Day 6'	=> 'Friday',
		'Day 5'	=> 'Thursday',
		'Day 3'	=> 'Tuesday',
		'Day 1'	=> 'Sunday'
		
	);
	
	echo '<h2>Associative Week Out of Order</h2>';
	
	echo '<pre>';
	
	print_r($associative_week);
	
	echo '</pre>';
	
	ksort($associative_week);
	
	echo '<h2>Associative Week after ksort()</h2>';
	
	echo '<pre>';
	
	print_r($associative_week);
	
	echo '</pre>';
	
	/**
	 * 
	 */
	
	?>

</body>
</html>
