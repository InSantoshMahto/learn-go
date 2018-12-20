<?php
	$error="";
	extract($_POST);
		include("connect_online.php");
    // sign in area
	if ((isset($signin))&&(!(empty($email)))&&(!(empty($password))))
	{
		$email=format_set($email);
		$password=base64_encode($password);
		$test_conn=mysql_connect($hostname,$username,$pwd);
		if ($test_conn)
		{
			//echo "connected<br/>";
			$test_db=mysql_select_db($db);
			if ($test_db)
			{
				//echo "Selected<br/>";
				$insert="SELECT user_id,email,first_name FROM admin WHERE password='".$password."' AND email='".$email."'";
              	$res=mysql_query($insert);
              	if($res!="")
              	{
             		$count=mysql_num_rows($res);
	             	if ($count>0)
	             	{
	             		//echo "$count<br/>Successfull<br/>";
	             		$row=mysql_fetch_assoc($res);
	             		$user_id=$row['user_id'];
	             		$first_name=$row['first_name'];
	             		$email=$row['email'];
	             		//test of creating global session
	             		$first_name=base64_encode($first_name);
	             		session_start();
	             		$_SESSION['user_id']="$user_id";
	             		$_SESSION['first_name']="$first_name";
	             		$_SESSION['email']=base64_encode($email);
	             		if ((isset($_SESSION['user_id']))&&(isset($_SESSION['first_name']))&&(isset($_SESSION['email'])))
	             		{
	             			header("Location: account.php");
	             		}
	             	}
              	}
              	else
              	{
              		$error="Something Went Wrong<br>Please Try Again";
              	}
			}
			else
			{
				$error="Something Went Wrong<br>Please Try Again";
			}
		}
		else
		{
			$error="Something Went Wrong<br>Please Try Again";
		}
	}
	//=============function area========================
	Function format_set($str)
	{
    	return(trim(strtoupper(strip_tags($str))));
	}
?>
<?php
	// checking existance of server
	session_start();
	if(((isset($_SESSION['user_id']))&&(!(empty($_SESSION['user_id']))))&&((isset($_SESSION['first_name']))&&(!(empty($_SESSION['first_name']))))&&((isset($_SESSION['email']))&&(!(empty($_SESSION['email'])))))
    {
      header("Location: account.php");
    }
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="GietKaryaneeti.in,giet,gunpur,event in giet,Sign in">
    <meta name="description" content=" This is the official Website of GIET,Gunupur for all events and functions in campus">
    <meta name="title" content="GietKaryaneeti.in">
    <meta name="author" content="GIET Gunupur">
    <link rel="icon" href="images/favicon.ico">
    <title>Sign In | GietKaryaneeti.in | ECE | AEI | GIET,Gunupur</title>
	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/starter.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
	<!-- Custom styles for footer area -->
	<link rel="stylesheet" href="css/footer.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<style>
		body
		{
			background-color: #d0dadb;
		}
		.error
		{
			color: red;
		}
		input[type=email],input[type=password]
		{
			padding-left: 10px;
			width: 70%;
			max-width: 300px;
			height: 45px;
			font-family: tahoma;
			font-size: 20px;
		}
		input[type=submit]
		{
			margin: 0px;
			padding: 0px;
			font-size: 25px;
			max-height: 40px;
			width: 150px;
		}
	</style>
</head>
<body>
	<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		<a class="navbar-brand" href="#">GietKaryaneeti.in</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://gietkaryaneeti.in">Home</a></li>
            <li><a href="event.php">Event</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="#">SignIn</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
<section>
	<div class="container" align="center">
		<h2><span class="label label-info">Log In To Your Account</span></h2><br>
		<span class="error"><?php echo "$error"?></span><br><br>
		<form method="post">
			<input type="email" name="email" id="email" placeholder="Enter Email (Lower Case Only)" required autocomplete autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br><br>
			<input type="password" name="password" id="password" placeholder="Password" required><br><br>
			<input type="submit" name="signin" id="submit" value=" Sign In " class="btn btn-success">
		</form>
	</div>
</section>
<footer class="footer-distributed">

          <div class="footer-left">

            <h3>GietKaryaneeti<span>.in</span></h3>

            <p class="footer-links">
              <a href="http://www.giet.edu" target="_blank">GIET</a>
              &nbsp;|&nbsp;
              <a href="#">ECE</a>
              &nbsp;|&nbsp;
              <a href="#">AEI</a>
            </p>

            <p class="footer-company-name">&copy; Copyright 2017 Gandhi Institute of Engineering and Technology (GIET)</p>
          </div>

          <div class="footer-center">

            <div>
              <i><img src="images/location.png" alt="location" width="35px" height="35px"></i>
              <p><span><b>Giet Gunupur Rayagada</b></span> Odisha India</p>
            </div><br>

            <div>
              <i><img src="images/call.png" alt="call" width="35px" height="35px"></i>
              <p>+917077040942&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            </div><br>

            <div>
              <i><img src="images/mail.png" alt="mail" height="35px" width="35px"></i>
              <p><a href="mailto:hodaei@giet.edu">hodaei@giet.edu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
            </div>

          </div>

          <div class="footer-right">

            <p class="footer-company-about"><br>
              <a href="http://onsi.in" alt="onsi.in" target="_blank" ><span class="btn btn-primary">About the Developer</span></a>
              This Website Is Developed And Maintained By <b> onsi.in</b>
            </p>

            <div class="footer-icons">

              <a href="https://www.facebook.com/onsi.in" target="_blank"><img src="images/fb.svg" alt="facebook" width="30px" height="30px"></a>
              <a href="https://www.instagram.com/onsi.in/" target="_blank"><img src="images/insta.png" alt="instagram" width="30px" height="30px"></a>
              <a href="https://twitter.com/onsihero" target="_blank"><img src="images/twitter.svg" alt="twitter" width="30px" height="30px"></a>
            </div>
          </div>
    </footer>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
