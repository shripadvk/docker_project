<?php

require('db_connect.php');

$mailID = $_POST['email'];

require('db_delete.php');

if ($conn->query($sql) === TRUE) 
{
    echo "
<html>
<head>
</head>
<body background ='blue.jpg'>
	      <script> alert('Account Deleted !!');
		window.history.go(-1);
	      </script>";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "</body></html>";
?> 

