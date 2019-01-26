<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title> Update Profile</title>
	<style>
          .jumbotron {
              
              text-align: center;
              margin-top: 50px;
	      margin-right: 285px;
	      margin-left: 285px;
	      margin-bottom: 10px;
	      padding-left:2px;
	      padding-right:2px;
	      padding-top:2px;
	      padding-bottom:2px;          
	}
	</style>
  </head>
  <body background="sea.jpg">
	<div class="jumbotron" id="jumbotron">
	<form class="text-center border border-light p-5" action="update_record.php" method="post">

    <p class="h4 mb-4">Update Profile</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            Name : <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="fname" 
value='<?php echo $_POST['fname']; ?>' required>
        </div>
        <div class="col">
            <!-- Last name -->
            Surname : <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lname"
value='<?php echo $_POST['lname']; ?>' required>
        </div>
    </div>
    <!-- E-mail -->
    Email ID: <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="newemail"
value='<?php echo $_POST['email']; ?>' required>
<input type='hidden' name='email' value='<?php echo $_POST['email']; ?>'>

    <!-- Phone number -->
    Phone Number : <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="contact"
value='<?php echo $_POST['contact']; ?>' required> 
   
<!-- Password -->
            Password : <input type="text" class="form-control" placeholder="Password" name="password"
value='<?php echo $_POST['passcode']; ?>' required>

<div class="form-row mb-4">
    <div class="col">    
	<!-- update button -->
	<button class="btn btn-success my-4 btn-block" type="submit">Update</button>
    </div>
    <div class="col">
	<!-- Cancel Button -->
	<button class="btn btn-danger my-4 btn-block" type="submit" onclick="window.history.go(-1); return false;">Cancel</button>        
	<!--<input action="action" onclick="window.history.go(-1); return false;" type="button" value="Cancel" />-->
    </div></div>
</form>			
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
