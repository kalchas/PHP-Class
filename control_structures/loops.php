<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Loops</title>
	
</head>

<body>
	
	<h1>Loops in PHP</h1>
	<?php
	
	/**
	 * PHP provides four kinds of loop: for, while, do-while and foreach. As of PHP 5.3, a goto is available. If better heads
	 * prevail, though, nobody will use it. (That last statement was flagrant editorializing. Nonetheless, we won't be covering 
	 * PHP's GOTO in this class.)
	 */
	
	echo '<h2>While</h2>';
	
	$pigs = 'wallowing creatures';
	
	while ('flying creatures' == $pigs) {
		
		echo 'James Lafferty is President of the United States'; //This code will not execute, because the condition is false.
		
	}
	
	$number = 30;
	$i = 0;
	
	while ($i < $number) {
		
		echo $i, ' is less than 30.<br />';
		
		$i++; //This line is important because if it's not there, the loop will go on forever.
		
	}
	
	echo '<hr />';
	
	/**
	 * do-while is a bit different from while, because the block of code it contains always gets executed at least once, 
	 * regardless of whether the condition is ever met. This can be useful, especially if you want me to be President:
	 */
	
	echo '<h2>Do-While</h2>';
	
	$pigs = 'wallowing creatures';

	do {

		echo 'James Lafferty is President of the United States'; //This code will not execute, because the condition is false.

	} while ('flying creatures' == $pigs)
	
	/**
	 * The same concern about infinite loops applies for do-while loops as for while loops. It may be easier to forget to increment
	 * in a do-while, though, because of the flipped order. Practice caution when using loops.
	 */
	
	echo '<hr />';
	
	/**
	 * A for loop executes while a condition is true, but includes the variable that stores the condition, its initial value
	 * and a method for incrementing it at the very beginning.
	 */
	
	for ($i; $i < 11; $i++) {
		
		
		
	}
	
	?>

</body>
</html>
