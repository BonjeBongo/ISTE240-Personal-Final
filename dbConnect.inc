<?php
$host = "localhost";
$username = "stv9643";
$passwd = "businessthink";
$database = "stv9643";
$mysqli = mysqli_connect($host, $username, $passwd, $database);
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
?>