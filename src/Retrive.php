<?php
echo "
<html>
<head>
<style>
body{ background: url('pathway.jpg') no-repeat center center fixed; webkit-background-size: cover; moz-background-size: cover; o-background-size: cover; background-size: cover; }	
</style>
<head>
<body>
";

require('db_connect.php');

$to_email = $_POST['mail'];

$sql = "SELECT * FROM user WHERE email='$to_email';";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	$row = $result->fetch_assoc();
	$password = $row['pword'];
}
else if($result->num_rows < 1)  
{
	$sql = "SELECT * FROM admin WHERE email='$to_email';";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
	$row = $result->fetch_assoc();
	$password = $row['pword'];
	}
	else
	echo "<script> alert('Your Mail ID is not found in our database !!'); 
	      location.href='Retrive.html';
		</script>";
}
else
{
	echo "<script> alert('Your Mail ID is not found in our database !!'); 
	      location.href='Retrive.html';
		</script>";
}
$conn->close();
		
	$subject = 'Forget Password';
	$message = 'This mail is sent in respose of forget password request on our website and your password is '.$password.'Good Luck';
	$headers = 'From: noreply@myCompany.com';
	mail($to_email,$subject,$message,$headers);
	echo "<script> alert('Mail sent ! Please check your mailbox'); location.href='Sign_in.html'; </script>";
	echo"</body></html>";
?>
