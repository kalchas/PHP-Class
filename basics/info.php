<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Server Configuration and Basic Information</title>
	
</head>

<body>

	<h1>Server Configuration and Basic Information</h1>
	<p>Now that we know about PHP tags and how to add comments, let's have a look at our first function. PHP has lots of functions; in the version running on my Mac there are 1,339, and that number can get bigger if more modules are added. In most instances and in this class, you'll find PHP running on an Apache web server. This certainly is not the only possibility, but it is, for the time being at least, the most common.</p>
	<p>One of the nice and also sometimes infuriating features of PHP is that it can be configured differently depending on why and where it's being deployed. Provided you have the correct permissions, you can configure your PHP deployment by editing the php.ini file and restarting the server. Finding the php.ini file, though, is sometimes a pain, especially on Windows machines. You can get the path to PHP, along with lots of other potentially useful information, by running phpinfo().</p>
	
	<?php
	
	//Give it a try. Add phpinfo(); below.
	
	phpinfo();
	
	/**
	 * When you've added in phpinfo() and view the page in your browser, you'll see that that little function gives us a lot 
	 * of information. To find the php.ini file, we can just ctrl + f and search for php.ini. The path will be labeled 
	 * "Configuration File (php.ini) Path" or something to that effect. This is just a text file, so we can edit it manually.
	 */
	
	?>
	
</body>
</html>
