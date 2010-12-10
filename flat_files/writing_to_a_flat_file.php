<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Writing to a Flat File</title>
	
</head>

<body>

	<h1>Writing to a Flat File</h1>
	
	<?php
	
	$data = array(
	
		'John Smith'	=> '1200 Elm Street, Somewhere, USA',
		'Barak Obama'	=> '1600 Pennsylvania Avenue, Washington D.C., USA'
		
	);
	
	$dir = realpath(dirname(__FILE__) . '/storage_warehouse/');
	
	$handle = fopen($dir . '/storage.csv', 'c');
	
	foreach ($data as $key => $value) {
		
		fwrite($handle, $key . ',' . $value . "\n");
		
	}
	
	fclose($handle);
	
	if (isset($_POST['fname'])) {
		
		unset($_POST['submit']);
		
		$handle = fopen($dir . '/rsvp.csv', 'a'); //Try to open a resource to append to.
		
		if (false == $handle) {
			
			$handle = fopen($dir . '/rsvp.csv', 'c'); //Failing that, create the resource.
			
		}
		
		fwrite($handle, implode(',', $_POST) . "\n");
		
		fclose($handle);
		
		echo '<p>Thank you for your rsvp, ' . $_POST['fname'] . '</p>';
		
	}
	
	?>
	
	<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="post">
		<fieldset>
			<legend>Personal Information</legend>
			<label>First Name <input name="fname" type="text" /></label>
			<br />
			<label>Last Name <input name="lname" type="text" /></label>
		</fieldset>
		<fieldset>
			<legend>Address</legend>
			<label>Street Address<input name="saddress" type="text" /></label>
			<br />
			<label>State<input name="state" type="text" /></label>
			<br />
			<label>Phone Number<input name="phone" type="text" /></label>
		<fieldset>
			<legend>Attending</legend>
			<label><input checked="checked" name="attending" type="radio" value="no" /> No</label>
			<br />
			<label><input name="attending" type="radio" value="yes" /> Yes</label>
		</fieldset>
		<input name="submit" type="submit" value="RSVP" />
	</form>

</body>
</html>
