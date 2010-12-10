<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Looping Arrays</title>
</head>
<body>

	<h1>Looping Arrays</h1>
	
	<?php
	
	/**
	 * Loops are control structures for executing commands more than once. We took a look at loops earlier, but they really
	 * turn cool when applied to arrays. In particular, the foreach loop pretty much only applies when dealing with arrays
	 * (and objects, which may be covered in another class). This example shows how to loop through an array using foreach.
	 */
	
	$your_array = array(
		
		'house' => '10 bedroom 5 1/2 bath',
		'kids'	=> 3.75,
		'boat'	=> 'Bayliner',
		'car'	=> 'Audi'
		
	);
	
	foreach ($your_array as $key => $value) {
		
		echo '<strong>' . ucwords($key) . ':</strong> ' . $value . '<br />';
		
	}
	
	/**
	 * By using the count() function we can do something similar with other kinds of loops. The other loops work better with
	 * indexed arrays.
	 */
	
	$my_array = array(
	
		'blender',
		'measuring cup',
		'box of bisquick'
		
	);
	
	echo '<h2>This is a list of my stuff</h2><ul>';
	
	for ($i = 0; $i < count($my_array); $i++) {
		
		echo '<li>' . $my_array[$i] . '</li>'
		
	}
	
	echo '</ul>';
	
	?>

</body>
</html>
