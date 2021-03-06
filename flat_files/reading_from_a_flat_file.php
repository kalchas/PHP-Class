<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Reading from a Flat File</title>
	
</head>

<body>

	<h1>Reading from a Flat File</h1>
	
	<?php
	
	$dir = realpath(dirname(__FILE__) . '/storage_warehouse/');
	
	$handle = @fopen($dir . '/rsvp.csv', 'r'); //Try to open the file and suppress warnings in case we can't.
	
	if (false != $handle) {
	
		$content = fread($handle, filesize($dir . '/rsvp.csv'));

		echo '<pre>' . $content . '</pre>';

		fclose($handle);
		
	} else {
		
		echo '<p>Sorry, that file does not exist.</p>';
		
	}
	
	?>

</body>
</html>
