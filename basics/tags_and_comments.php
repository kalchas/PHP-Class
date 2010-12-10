<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Tags and Comments</title>
</head>
<body>
	
	<h1>Tags and Comments</h1>
	
	<?php ?> <p>There are PHP tags next to this paragraph. They're in the file on the server side,
		but disappear the time it gets to the client. Check the source code if you're not convinced.</p>
		
	<? ?> <p>There are short open PHP tags next to this paragraph. They get used for templates sometimes
		and other situations where you want to drop a variable in really quickly. They also make your code
		less portable and pose a potential security risk. If you can avoid them, please do.</p>
		
	<?php
	
	/**
	 * You can use this style for multiline comments in PHP.
	 * Comments are never sent to the client, and while they may add slightly to file size on the server,
	 * they're usually going to be well worth it. Don't write silly comments, but do use comments to provide
	 * pertinent information about what your code is doing to others and to your future self.
	 */
	
	//Oh, and PHP uses this method (the double slash) for single line comments.
	
	//You can use the space below to write a few comments of your own. Try both multiline and single line formats.
	
	
	?>

</body>
</html>
