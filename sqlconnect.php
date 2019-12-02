<?php

$servername = "localhost";
$database = "schema";
$username = "admin@bugme.com";
$password = "password123";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
}

catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>