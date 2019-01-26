<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Welcome</title>
	<style>
     	
	body{
		background-image:url("good-afternoon.jpg");
		background-repeat: no-repeat;
		background-position: top;
	      
	} 
          .jumbotron {
              
              text-align: center;
              margin-top: 10px;
	      margin-right: 200px;
	      margin-left: 200px;
	      margin-bottom:10px;
	      padding-left:10px;
	      padding-right:10px;
	      padding-top:10px;
	      padding-bottom:200px;          
	}
	</style>
</head>
<body>
<div class="jumbotron" id="jumbotron">
<?php
	
	if ($_POST["uname"]!="Shripad"){
  	echo "<script> location.href='index.html'; </script>";
        exit;
 	}
	else{	
	echo "User ";
	echo($_POST['uname']);
	echo " Logged in Successfully.";		
	}
?>
</div> 
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
