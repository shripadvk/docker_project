<?php
echo "
<html>
<head>
<style>
body{ background: url('WALL.jpg') no-repeat center center fixed; webkit-background-size: cover; moz-background-size: cover; o-background-size: cover; background-size: cover; }	
</style>
<head>
<body>
";
require('db_connect.php');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['dp']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($_FILES['dp']['tmp_name']);
$firstname= $_POST['fname'];
$lastname= $_POST['lname'];
$gender= $_POST['gender'];
$age= $_POST['groupOfDefaultRadios'];
$mailID= $_POST['email'];
$mobile= $_POST['contact'];
$password= $_POST['pword'];

#Server Side Validation
$flag=0;
$fname_error='';
$lname_error='';
$email_error='';
$password_error='';
$mobile_error='';

	if(!preg_match("/^[a-zA-Z]*$/",$firstname)){
		$fname_error="Only Letters are allowed in First Name field";
		echo "<script> alert('$fname_error'); window.history.go(-1); </script>";	
	}if(!preg_match("/^[a-zA-Z]*$/",$_POST["lname"])){
		$lname_error="Only Letters are allowed in Last Name field";
		echo "<script> alert('$lname_error'); window.history.go(-1); </script>";	
	}if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
		$email_error="Please Enter a Valid Mail Address";
		echo "<script> alert('$email_error'); window.history.go(-1); </script>";
	}
	$uppercase = preg_match('@[A-Z]@', $_POST["pword"]);
	$lowercase = preg_match('@[a-z]@', $_POST["pword"]);
	$number    = preg_match('@[0-9]@', $_POST["pword"]);
	if(!$uppercase || !$lowercase || !$number || strlen($_POST["pword"]) < 6){ 
		$password_error="Please Fulfill password requirements !!";
		echo "<script> alert('$password_error'); window.history.go(-1); </script>";
	}
	$mobileregex = "/^[6-9][0-9]{9}$/" ;
	if(!preg_match($mobileregex,$_POST["contact"])){
		$mobile_error="Please Enter a Valid Mobile Number";
		echo "<script> alert('$mobile_error'); window.history.go(-1); </script>";	
	}

	if($fname_error=="" && $lname_error=="" && $email_error=="" && $password_error=="" && $mobile_error=="")
		$flag=1;
#End of Validation
if($flag==1){

	if (move_uploaded_file($_FILES['dp']['tmp_name'], $target_file)) 
	{
            echo "<br>Your Profile picture ". basename( $_FILES['dp']['name']). " has been uploaded to the database.<br>";
        } 
	else 
        {
            echo "<br>Sorry, there was an error uploading your profile picture.<br>";
        }
	
require('db_create.php');

if ($conn->query($sql) === TRUE) 
{
    echo "<script> alert('Account Created !!');
	      location.href='Sign_in.html'; 
	      </script>";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo"</body></html>";
}
?> 

