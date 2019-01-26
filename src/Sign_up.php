<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title> Sign Up </title>
	<style>
          .jumbotron {
              
              text-align: center;
              margin-top: 50px;
	      margin-right: 285px;
	      margin-left: 285px;
	      padding-left:10px;
	      padding-right:10px;
	      padding-top:10px;
	      padding-bottom:20px;          
	}
	body{ background: url("train.jpg") no-repeat center center fixed; webkit-background-size: cover; moz-background-size: cover; o-background-size: cover; background-size: cover; }
	</style>
  </head>
  <body>
	<div class="jumbotron" id="jumbotron">
	<form class="text-center border border-light p-5" action="Signup.php" method="post" enctype="multipart/form-data" onsubmit="return checkForm(this);">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="fname" required>
	</div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lname" required>
	</div>
    </div>
	<label>Gender</label>
    <select class="browser-default custom-select mb-4" name="gender">
        <option value="" disabled>Choose option</option>
        <option value="Male" selected>Male</option>
        <option value="Female">Female</option>
        <option value="Transgender">Transgender</option>
    </select>

    <!-- Age group -->
<p><label>Tell us your age group</label></p>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" value="Teenager (13 to 19)">
  <label class="custom-control-label" for="defaultGroupExample1">Teenager (13 to 19)</label>
</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" value="Adult (20 to 50)" checked>
  <label class="custom-control-label" for="defaultGroupExample2">Adult (20 to 50)</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios" value="Senior Citizen">
  <label class="custom-control-label" for="defaultGroupExample3">Senior Citizen</label>
</div>
    <!-- E-mail -->
    <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required>
	
    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="pword" required>
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
    Must be a minimum of 6 characters and contain at least 1 number,one uppercase character,one lowercase character
    </small>
    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="contact" required>
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        incase you forget password, OTP will be sent to this number
    </small>
	<br>
    <!-- Upload File -->
    <label>Add profile picture  -></label>
	<input type="file" id="fileinput" name="dp" >

    <!-- Terms and conditions -->
    <p><div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter" name="terms">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">I accept all terms and conditions</label>
    </div></p>

<div class="form-row mb-4">
        <div class="col">    
    <!-- Sign up button -->
    <button class="btn btn-success my-4 btn-block" type="submit" name="submit">Sign up</button>
	</div>
        <div class="col">    
<button class="btn btn-danger my-4 btn-block" type="submit" onclick="window.history.go(-1); return false;">Existing User ? Sign in</button></div></div>
    <hr>

    <!-- Terms of service -->
    <p>Before clicking
        <strong>Sign up</strong> you may like to check our
        <em><a href="NewTerms.html" target="_blank">terms of service</a></em>
	</form>			
	</div>
	<script type="text/javascript">
	function checkForm(form)
  	{
	      if(!form.terms.checked) {
	      alert("Please indicate that you accept the Terms and Conditions");
      	      form.terms.focus();
    	      return false;
      	}
	    return true;
	  }
	</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
