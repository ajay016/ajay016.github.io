
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="style.css">
   <script src="signupalert.js"></script>
	<title>Sign up</title>
</head>
<body class="signup">


		<h2>Sign up</h2>
		<form name="form1"class="signup-form" action="includes/signup.inc.php" method="POST" onsubmit="return validate()">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="Lastname">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="address" placeholder="Address">
			<input type="text" name="phone" placeholder="Phone">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Sign up</button>
		</form>


<?php
    include_once 'footer.php'
?>