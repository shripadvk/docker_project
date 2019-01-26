<?php

$db = parse_ini_file("database.ini");

$server = $db['servername'];
$user = $db['username'];
$password = $db['userpassword'];
$database = $db['databasename'];

$conn = new mysqli($server, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
