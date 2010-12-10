<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Adding Data to A Database</title>
	
</head>

<body>
	
	<?php
	
	require_once(realpath(dirname(__FILE__) . '/connection.php')); //This will provide a connection to the database.
	
	?>
	
	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
	
		<fieldset>
			<legend>Personal Information</legend>
			<label>First Name <input name="fname" type="text" /></label>
			<br />
			<label>Last Name <input name="lname" type="text" /></label>
		</fieldset>
		<fieldset>
			<legend>Address</legend>
			<label>Street Address 1<input name="saddress1" type="text" /></label>
			<br />
			<label>Street Address 2<input name="saddress2" type="text" /></label>
			<br />
			<label>City<input name="city" type="text" /></label>
			<label>State<input name="state" type="text" /></label>
			
		</fieldset>
	</form>


</body>
</html>
