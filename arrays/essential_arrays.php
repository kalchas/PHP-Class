<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Essential Arrays</title>
</head>
<body>

	<?php
	
		//Creating arrays.
		
		//Method 1. The "array" language construct.
		
		$my_array = array(); //Creates an empty array
		
		$your_array = array( //Creates an array with stuff in it. Aren't you lucky?
		
		//I'm going to put the stuff that goes in here on new lines b/c it makes it easier to read
		
			"car", //Notice that these end in a comma, not a semicolon.
			"boat",
			"house",
			"husband",
			"kids"
			
		);
		
		//Ok, but how do I see what's in the arrays?
		echo '<pre>';
		
		print_r($my_array); //Outputs an empty array.
		
		echo '</pre><hr />';
		
		echo '<pre>';
		
		print_r($your_array); //A little more interesting.
		
		echo '</pre><hr />';
		
		//Method 2. Just make a variable and start adding stuff to it.
		
		$daves_array[] = "ocean view";
		$daves_array[] = "caribbean cruise vacation";
		
		echo '<pre>';
		
		print_r($daves_array); //What do we have here?
		
		echo 'Element with index 0: ' . $array[0]; //How to reference elements in an indexed array.
		
		echo '</pre><hr />';
		
		//Play with arrays below. Use each method to create your own array and then print it to output.
		
		
		
	
	?>

</body>
</html>
