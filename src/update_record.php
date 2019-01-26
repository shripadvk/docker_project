<?php

require('db_connect.php');

$firstname= $_POST['fname'];
$lastname= $_POST['lname'];
$mailID= $_POST['newemail'];
$mobile= $_POST['contact'];
$password= $_POST['password'];
$curr_mail= $_POST['email'];

require('db_update.php');

if ($conn->query($sql) === TRUE) 
{
    echo "
<html>
<head>
</head>
<body background ='lights.jpg'>
	      <script> alert('Account information updated !!');
	      location.href='Sign_in.html';
	      </script>";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "</body></html>";
?> 

