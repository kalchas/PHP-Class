<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Variables and Output</title>
</head>
<body>
	
	<h1>Variables and Output</h1>
	<pre><!--this should make the PHP easier to read-->
	<?php
	
	/*
	 * Php wouldn't be very useful if all it did was let us write comments in our web pages. To begin actually writing PHP,
	 * we need more. Let's start by printing a message to output. In PHP, output is usually the http response body (the web page).
	 *
	 * The two most common ways to do this are echo and print(). Echo is a language construct and print() is a function.
	 */
	
	echo 'Hello, world! (because it is traditional)';
	
	print('Hello, world! (because it is fun to be repetitive)');
	
	/*
	 * Use the space below to echo and print some statements of your own. It really doesn't matter much which you use, but it's
	 * always a good idea to be consistent if possible.
	 */
	
	
	
	
	/*
	 * Php has eight types of variable: boolean, string, integer, floating-point number, array, object, resource and null. Php variables are different from variables in some
	 * other languages because they are loosely typed. In C or C++, if I'm going to create a variable that holds a number,
	 * I have to say that up front. Php does not have that restriction.
	 *
	 * There are some rules, however. Variables in PHP always start with the dollar sign ($). After the dollar sign, the first
	 * character must be an underscore or a letter. Then any combination of letters, numbers and underscores is acceptable.
	 * For example: $variable1, $_variable2, $Variable3 are acceptable. $1 is unacceptable, as is $v@riabl3.
	 *
	 * We're just going to deal with booleans, the two kinds of numbers and strings for now. We'll cover arrays later in the course 
	 * and objects may be covered in another course. We'll use resources when we deal with data storage in the second day of the class.
	 * 
	 * For more detailed information about variables, see http://us.PHP.net/manual/en/language.variables.PHP.
	 */
	
	$my_var = 0; //This variable contains the number zero (which behaves like the string '0' in a string context).
	
	$my_second_var = 'James Lafferty'; //This variable contains the string 'James Lafferty'.
	
	$my_third_var = '2'; //This variable contains the string 2 (which behaves like the number 2 in a number context).
	
	/**
	 * You should use the space here to create some variables of your own.
	 */
	
	
	
	
	/**
	 * Now, print or echo the variables we created above. (HINT: The syntax is what you probably expect.)
	 */
	
	
	
	?>
	</pre>
</body>
</html>
