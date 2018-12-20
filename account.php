<?php
	session_start();
	extract($_REQUEST);
    if(((isset($_SESSION['user_id']))&&(!(empty($_SESSION['user_id']))))&&((isset($_SESSION['first_name']))&&(!(empty($_SESSION['first_name']))))&&((isset($_SESSION['email']))&&(!(empty($_SESSION['email'])))))
    {
    	//work area
    	$first_name=base64_decode($_SESSION['first_name']);
      include("connect_online.php");
    	$test=mysql_connect($hostname,$username,$pwd);
    	if ($test)
    	{
    		$test_db=mysql_select_db($db);
    	/*	if ($test_db)
    		{
    			$display="SELECT last_name from a";
    			$res=mysql_query($display);
    			$row=mysql_fetch_assoc($res);
    			echo $row['last_name'];
    		} */
    	}
    }
    else
    {
    	header("Location: signin.php");
    }
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="GietKaryaneeti.in,giet,gunpur,event in giet,Account-Office">
    <meta name="description" content=" This is the official Website of GIET,Gunupur for all events and functions in campus">
    <meta name="title" content="GietKaryaneeti.in">
    <meta name="author" content="GIET Gunupur">
    <link rel="icon" href="images/favicon.ico">
    <title>Account-Office | GietKaryaneeti.in | ECE | AEI | GIET,Gunupur</title>

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
 	<!--style for log out option  -->
    <link rel="stylesheet" type="text/css" href="css/account.css">
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
            <li><a href="index.php">Home</a></li>
            <li><a href="event.php">Event</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="signin.php">office</a></li>
            <li><a href="#"><span><i>Welcome</i>,<b><?php echo "$first_name"; ?></b></span></a></li>
            <li>
            	<a href="systemout.php" id="out">
	            	<div class="containerout">
	  					<img src="images/out.jpg" alt="Sign Out" class="image">
	  				<div class="overlay">
	    			<div class="text">Log Out</div>
	  				</div>
					</div>
				</a>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </header>
	<section>
    <div class="container">
    <!--===================== add your data ========================-->
    <h1 align="center" class="btn-danger">Karyaneeti Office Zone</h1>
    <a href="tshirtdb.php" class="btn btn-warning">T-Shirt</a><br><br>
    <a href="eventdb.php?event=<?php echo base64_encode("quiz"); ?>" class="btn btn-info">Quiz</a>
    <a href="eventdb.php?event=<?php echo base64_encode("circuit-designing"); ?>" class="btn btn-danger">Circuit-Designing</a>
    <a href="eventdb.php?event=<?php echo base64_encode("rangoli"); ?>" class="btn btn-success">Rangoli</a>
    <a href="eventdb.php?event=<?php echo base64_encode("artgallery"); ?>" class="btn btn-warning">Art Gallery</a>
    <a href="eventdb.php?event=<?php echo base64_encode("tech-roadies"); ?>" class="btn btn-primary">Tech-Roadies</a>
    <a href="eventdb.php?event=<?php echo base64_encode("just-a-minute"); ?>" class="btn btn-info">JAM</a>
    <a href="eventdb.php?event=<?php echo base64_encode("nail-painting"); ?>" class="btn btn-danger">Nail-Painting</a>
    <a href="eventdb.php?event=<?php echo base64_encode("nfs"); ?>" class="btn btn-success">NFS</a>
    <a href="eventdb.php?event=<?php echo base64_encode("fifa"); ?>" class="btn btn-warning">FIFA</a>
    <a href="eventdb.php?event=<?php echo base64_encode("poster-presentaion"); ?>" class="btn btn-primary">Poster-Presentaion</a>
    <a href="eventdb.php?event=<?php echo base64_encode("paper-presentaion"); ?>" class="btn btn-info">Paper-Presentaion</a>
    <a href="eventdb.php?event=<?php echo base64_encode("singing"); ?>" class="btn btn-danger">Singing</a>
    <a href="eventdb.php?event=<?php echo base64_encode("comedy"); ?>" class="btn btn-success">Comedy</a>
    <a href="eventdb.php?event=<?php echo base64_encode("magic"); ?>" class="btn btn-warning">Magic</a>
    <a href="eventdb.php?event=<?php echo base64_encode("stunt"); ?>" class="btn btn-primary">Stunt</a>
    <a href="eventdb.php?event=<?php echo base64_encode("treasure-hunt"); ?>" class="btn btn-info">Treasure Hunt</a>
    <a href="eventdb.php?event=<?php echo base64_encode("line-follower"); ?>" class="btn btn-danger">line-follower</a>
    <a href="eventdb.php?event=<?php echo base64_encode("task-master"); ?>" class="btn btn-success">Task Master</a>
    <a href="eventdb.php?event=<?php echo base64_encode("groupie"); ?>" class="btn btn-warning">Groupie</a>
    <a href="eventdb.php?event=<?php echo base64_encode("mini-militia"); ?>" class="btn btn-primary">Mini-Militia</a>
    <a href="eventdb.php?event=<?php echo base64_encode("painting"); ?>" class="btn btn-info">Painting</a>
    <a href="eventdb.php?event=<?php echo base64_encode("rock-band"); ?>" class="btn btn-danger">Rock-Band</a>
    <a href="eventdb.php?event=<?php echo base64_encode("dancing"); ?>" class="btn btn-success">dancing</a>
    <div>
    <div>
      <h3 style="background-color: #000;color: #fff;font-family: tahoma;text-align: center;">Winner Area </h3>
      <a class="btn btn-success" href="results.php?results=<?php echo base64_encode("enter"); ?>">Results Enter</a>
      <a class="btn btn-info" href="results.php?results=<?php echo base64_encode("view"); ?>">Results View</a>
    </div>
    <h2>on the spot registration</h2>
    <div style="display: block; width: 100px;">
			<a href="eventsignup.php?event=<?php echo base64_encode("quiz"); ?>" class="list-group-item">Quiz</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("circuit-designing"); ?>" class="list-group-item">Circuit Design</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("treasure-hunt"); ?>" class="list-group-item">Treasure Hunt</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("artgallery"); ?>" class="list-group-item">Art Gallery</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("nfs"); ?>" class="list-group-item">NFS</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("mini-militia"); ?>" class="list-group-item">Mini Militia</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("fifa"); ?>" class="list-group-item">FIFA</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("tech-roadies"); ?>" class="list-group-item">Tech Roadies</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("poster-presentation"); ?>" class="list-group-item">Poster Presentation</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("paper-presentation"); ?>" class="list-group-item">Paper Presentation</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("just-a-minute"); ?>" class="list-group-item">JAM</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("nail-painting"); ?>" class="list-group-item">Nail Painting</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("rangoli"); ?>" class="list-group-item">Rangoli</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("line-follower"); ?>" class="list-group-item">Line Follower</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("task-master"); ?>" class="list-group-item">Task Master</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("groupie"); ?>" class="list-group-item">Groupie</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("dancing"); ?>" class="list-group-item">Dancing</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("singing"); ?>" class="list-group-item">Singing</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("painting"); ?>" class="list-group-item">Painting</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("rock-band"); ?>" class="list-group-item">Rock Band</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("comedy"); ?>" class="list-group-item">Comedy</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("magic"); ?>" class="list-group-item">Magic</a>
			<a href="eventsignup.php?event=<?php echo base64_encode("stunt"); ?>" class="list-group-item">Stunt</a>
    </div>
    </div>
    </div><!-- /.container -->
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
