<?php

require("login.php");
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>BugMe Issue Tracker</title>

		<link href="styles.css" type="text/css" rel="stylesheet"/>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
	</head>

	<body>
		<header>
			<h1><i class="fa fa-bug"> BugMe Issue Tracker</i></h1>
		</header>

		<div class="sidebar">
			<p><i class="fa fa-home"> <a href="">Home</a></i></p>
			<p><i class="fa fa-user-plus"> <a href="">Add New User</a></i></p>
			<p><i class="fa fa-plus-circle"> <a href="">New Issue</a></i></p>
			<p><i class="fa fa-power-off"> <a href="">Logout</a></i></p>
		</div>

		<main>
			<h1> NEW USER </h1>
			<form action="login.php" method="post">
				<label for="firstname">First Name</label><br>
				<input id="firstname" type="text" name="firstname"/><br><br>
				<label for="lastname">Last Name</label><br>
				<input id="lastname" type="text" name="lastname"/><br><br>
				<label for="password">Password</label><br>
				<input id="password" type="text" name="password"/><br><br>
				<label for="email">Email</label><br>
				<input id="email" type="text" name="email"/><br><br>
				<input type="submit" value="SUBMIT">
			</form>
		</main>
	</body>

</html>