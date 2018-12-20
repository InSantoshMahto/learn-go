<?php
	extract($_REQUEST);
	$evtTest=false;
	$evtNext=false;
	if (isset($next))
	{
		$evtTest=true;
		$evtNext=$evtName;
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
    <meta name="title" content="GietKaryaneeti.in | ECE | AEI | GIET,Gunupur">
    <meta name="author" content="GIET Gunupur">
    <link rel="icon" href="images/favicon.ico">
    <title>Send Mail | GietKaryaneeti.in | ECE | AEI | GIET,Gunupur</title>
	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/signin.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/starter.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
	<!-- Custom styles for footer area -->
	<link rel="stylesheet" href="css/footer.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
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
            <li><a href="tshirt.php">T-Shirt</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="signin.php">office</a></li>
            <li class="active"><a href="#">Send Mail</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
<section class="container">
	<div class="form-signin" align="center">
		<h2><span class="form-signin-heading">Mail System Office Zone</span></h2>
		<form class="form-signin" method="get" action="">
		<?php
		if ($evtTest) {
			# code...
		}
		?>
		<div>
		<select class="form-control" name="evtName">
			<option>Select a Event</option>
			<option>quiz</option>
			<option>circuit-designing</option>
			<option>rangoli</option>
			<option>art-gallery</option>
			<option>tech-roadies</option>
			<option>just-a-minute</option>
			<option>nail-painting</option>
			<option>nfs</option>
			<option>fifa</option>
			<option>poster-presentation</option>
			<option>paper-presentation</option>
			<option>singing</option>
			<option>treasure-hunt</option>
			<option>line-follower</option>
			<option>task-master</option>
			<option>groupie</option>
			<option>mini-militia</option>
		</select>
		<?php
		?>
        <br><input type="submit" name="next" value="next" class="btn btn-lg btn-primary btn-block">
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
              <span class="btn btn-primary">About the Developer</span>
              This Website Is Developed And Maintained By <b> onsi.in</b>
            </p>

            <div class="footer-icons">

              <a href="https://facebook.com/onsi.in" target="_blank"><img src="images/fb.png" alt="onsi.in" width="30px" height="30px"></a>
              <a href="http://onsi.in" target="_blank"><img src="images/onsi.ico" alt="onsi.in" width="30px" height="30px"></a>
            </div>
          </div>
    </footer>
    </div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
