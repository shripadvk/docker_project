<?php

require('db_connect.php');
$inputmailID=$_POST['mail'];
$inputpassword=$_POST['pword'];

//echo "mail ID is".$inputmailID."<br> password is ".$inputpassword;

$sql = "SELECT * FROM admin WHERE email='$inputmailID' AND pword='$inputpassword';";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	$row = $result->fetch_assoc();
	$path =	$row['dp'];
   //echo "<img src='$path' width='200' height='200'>";
        $fname = $row['fname'];
	$lname = $row['lname'];
	$gender = $row['gender'];
	$agegroup = $row['agegroup'];
	$mailID = $row['email'];
	$Number=$row['contact'];
}
else 
{
	echo "<script> alert('Incorrect Username or Password !!');
	      location.href='admin.html'; 
	      </script>";
}

echo"
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 'Lato', sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2{
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url($path);
  min-height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: none;
  font: 20px 'Lato', sans-serif;
  color: #111;
}

@media only screen and (max-device-width: 1024px) {
  .bgimg-1 {
    background-attachment: scroll;
  }
}
</style>
</head>
<body>

<div class='bgimg-1'>
  <div class='caption'>
  <span class='border'>Welcome to Dashboard, $fname :)</span>
  </div>
</div>

<div style='color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;'>
  <h3 style='text-align:center;'>$fname  $lname</h3>
  <p> This is your personal information :
<h4>First Name : </h4><h3> $fname</h3> 
<h4>Last Name : </h4><h3>$lname</h3>
<h4>Email ID : </h4><h3> $mailID </h3>
<h4>Gender : </h4><h3> $gender </h3>
<h4>Age Group : </h4><h3> $agegroup </h3> 
<h4>Mobile Number : </h4><h3> $Number </h3>
</p>
</div>
</body>
</html>";

require('db_read.php');
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) 
{
	while($row = $result2->fetch_assoc())
	{
	$path2 = $row['dp'];
        $fname = $row['fname'];
	$lname = $row['lname'];
	$gender = $row['gender'];
	$agegroup = $row['agegroup'];
	$mailID = $row['email'];
	$Number=$row['contact'];
	$password=$row['pword'];
echo"
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 'Lato', sans-serif;
  color: #777;
}

.bgimg-1{
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url($path);
  min-height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: none;
  font: 20px 'Lato', sans-serif;
  color: #111;
}

@media only screen and (max-device-width: 1024px) {
  .bgimg-1 {
    background-attachment: scroll;
  }
}
</style>
</head>
<body>

<div class='bgimg-1'>
  <div class='caption'>
  <span class='border'>This profile belongs to $fname !</span>
  </div>
</div>

<div style='color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;'>
  <h3 style='text-align:center;'>$fname  $lname</h3>
<img src='$path2' width='300' height='300'>  
<p> Profile Information :
<h4>First Name : </h4><h3> $fname</h3> 
<h4>Last Name : </h4><h3>$lname</h3>
<h4>Gender : </h4><h3> $gender </h3>
<h4>Age Group : </h4><h3> $agegroup </h3> 
<h4>Mobile Number : </h4><h3> $Number </h3>
<h4>Email ID : </h4><h3> $mailID </h3>
<h4>Password : </h4><h3> $password </h3>
<form action='delete.php' method='post'>
<input type='hidden' name='email' value='$mailID'>
<input type='submit' value='Delete this profile'  style='height:50px; width:250px; border: 2px solid blue; border-radius: 4px;background-color: #F08080;'/>
</form>
</p>
</div>
";	
	}
}
else 
{
	echo "No Records Found in our database";
}
echo "
<div class='bgimg-1'>
  <div class='caption'>
  <span class='border'>That's it!</span>
  <br><br><form action='admin.html' method='post'>
  <input type='submit' value='Log Out...' style='height:50px; width:150px; border: 2px solid red; border-radius: 4px;background-color: #3CB371;'/>
  </form>
</div>
</body>
</html>";
$conn->close();
?>
