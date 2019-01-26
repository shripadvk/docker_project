<?php

$conn = new mysqli("mysql", "shripad", "passwd", "my_db");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
