<?php

/**
 * Cookies need to be set before output is sent to the client. Cookies are not evil, but some uses of cookies are.
 * Try to avoid storing anything that's confidential in a cookie.
 */

	$expire = time() + 3600;
	
	if (isset($_GET['cookie_no_like']) && true == $_GET['cookie_no_like']) {
		
		$expire = time() - 36000;
		
		$name = 'me_like_cookie';

		$value = true;

		setcookie($name, $value, $expire);
		
		header('Location: ' . $_SERVER['PHP_SELF']);
		
	}
	
	$name = 'me_like_cookie';
	
	$value = true;

	setcookie($name, $value, $expire);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Cookies</title>
	
</head>

<body>

	<h1>Cookies</h1>
	
	<?php
	
	if (isset($_COOKIE['me_like_cookie'])) {
		
		echo '<p>Oh, you like cookies! Me too!</p>';
		
		echo '<p><a href="' . $_SERVER['PHP_SELF'] . '?cookie_no_like=true">Click here if I\'ve made a mistake and you don\'t really like cookies.</a>';
		
	} else {
		
		echo '<p>Oh well. I like cookies.</p>';
		
	}
	
	?>

</body>
</html>
