<?php

require('db_connect.php');
$inputmailID=$_POST['mail'];
$inputpassword=$_POST['pword'];

//echo "mail ID is".$inputmailID."<br> password is ".$inputpassword;

$sql = "SELECT * FROM user WHERE email='$inputmailID' AND pword='$inputpassword';";
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
	$passcode=$row['pword'];
}
else 
{
	echo "<script> alert('Incorrect Username or Password !!');
	      location.href='Sign_in.html'; 
	      </script>";
}
$conn->close();
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

.bgimg-2 {
  background-image: url('fb.jpg');
  min-height: 400px;
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
  text-transform: uppercase;
  font: 20px 'Lato', sans-serif;
  color: #111;
}

@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2 {
    background-attachment: scroll;
  }
}
</style>
<title>$fname $lname</title>
</head>
<body>

<div class='bgimg-1'>
  <div class='caption'>
  <span class='border'>Welcome to Facebook, $fname :)</span>
  </div>
</div>

<div style='color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;'>
  <h3 style='text-align:center;'>$fname  $lname</h3>
  <p>This is your profile information from our database :
<h4>First Name : </h4><h3> $fname                  </h3> <h4>   Last Name : </h4><h3>$lname</h3>
<h4>Gender : </h4><h3> $gender </h3>
<h4>Age Group : </h4><h3> $agegroup </h3> 
<form action='update.php' method='post'>
<input type='hidden' name='fname' value='$fname'>
<input type='hidden' name='lname' value='$lname'>
<input type='hidden' name='email' value='$mailID'>
<input type='hidden' name='contact' value='$Number'>
<input type='hidden' name='passcode' value='$passcode'>
<input type='submit' value='Update Profile'  style='height:50px; width:250px; border: 2px solid red; border-radius: 4px;background-color: #FFD700;'/>
</form>
</p>
</div>

<div class='bgimg-2'>
  <div class='caption'>
  <span class='border' style='background-color:transparent;font-size:25px;color: #f7f7f7;'>Mobile No. $Number</span>
  </div>
</div>

<div style='position:relative;'>
  <div style='color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;'>
  <p>Your Mail Address :  $mailID</p>
  </div>
</div>

<div class='bgimg-1'>
  <div class='caption'>
  <span class='border'>That's it from our side!</span>
  <br><br><form action='Sign_in.html' method='post'>
  <input type='submit' value='Log Out...' style='height:50px; width:150px; border: 2px solid red; border-radius: 4px;background-color: #00BFFF;'/>
  </form>
</div>
</div>

</body>
</html>";
?>
