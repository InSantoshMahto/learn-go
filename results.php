<?php
	session_start();
	extract($_REQUEST);
    if(((isset($_SESSION['user_id']))&&(!(empty($_SESSION['user_id']))))&&((isset($_SESSION['first_name']))&&(!(empty($_SESSION['first_name']))))&&((isset($_SESSION['email']))&&(!(empty($_SESSION['email'])))))
    {
    	$header_name=base64_decode($_SESSION['first_name']);
    	$header_email=base64_decode($_SESSION['email']);
    	$header_user_id=$_SESSION['user_id'];
    	// including connection file
  		include("connect_online.php");
  		//stablising db connection
  		mysql_connect($hostname,$username,$pwd);
  		 //selecting db
  		mysql_select_db($db);
      // for storing encoded result value
      $backResults=$results;
      //decoding result value i.e, enter or view
      $results=base64_decode($results);
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="GietKaryaneeti.in,giet,gunupur,event in giet,Tshirt-Office">
    <meta name="description" content=" This is the official Website of GIET,Gunupur for all events and functions in campus">
    <meta name="title" content="GietKaryaneeti.in">
    <meta name="author" content="GIET Gunupur">
    <link rel="icon" href="images/favicon.ico">
	<title>Results-Office | GietKaryaneeti.in | ECE | AEI | GIET,Gunupur</title>
	<!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
 	<!--style for log out option  -->
    <link rel="stylesheet" type="text/css" href="css/account.css">
    <!-- Custom styles for footer area -->
    <link rel="stylesheet" href="css/footer.min.css">
    <!-- Custom styles for signin area -->
    <link rel="stylesheet" href="css/signin.css">
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <style type="text/css">
      tr,td,th
      {
        border:3px solid #aeb;
        text-align: center;
        font-size: 15px;
        background-color: #fff;
        color: #000;
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
              <li><a href="gallery.php">Gallery</a></li>
	            <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="signin.php">office</a></li>
	            <li class="active"><a href="results.php?results=<?php echo $backResults; ?>">Results</a></li>
	             <li><a href="#"><span><i>Welcome</i>,<b><?php echo "$header_name"; ?></b></span></a></li>
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
	<?php
  switch ($results)   
  {
    case 'enter': 
                  // checking for admin access
                if (!(($header_user_id==1)&&($header_name=="santosh")&&($header_email=="onsihero@gmail.com")))
                {
                  ?>
                  <blockquote style="text-align: center;color: red;font-size: 30px;">You are not allow to access this service</blockquote>
                  <?php
                }
                else
                {
                  results_enter();
                }
    break;
    case 'view': 
                  // checking for admin access
                if (!(($header_user_id==1)&&($header_name=="santosh")&&($header_email=="onsihero@gmail.com")))
                {
            /*      ?>
                  <blockquote style="text-align: center;color: red;font-size: 30px;">You are not allow to access this service</blockquote>
                  <?php  */
                  results_view();
                }
                else
                {
                  results_view();
                }
    break;
    default:
                header("Location: signin.php");
    break;
  }
      
	}
   	else
    {
    	header("Location: signin.php");
 	}
?>
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
<?php
/*----- function ----  Zone   start-----*/
/*----- results_enter :-    for accepting request  ------*/
	function results_enter()
	{
    extract($_REQUEST);
    $chk=true;
    $errMsg="";
    if ((isset($chkGroup))&&(!empty($chkGroup))) 
    {
      $chk=false;
      if ($evtName=="fail")
      {
        $errMsg="You have not selected any of the event";
        $chk=true;
      }
    }
		?>
   		 <div class="container">
  		  <h1 align="center" class="btn-danger">Karyaneeti Results Entry</h1>
        <div id="Select">
              <form class="form-signin" method="post" action="">
              <?php
                if ($chk) 
                {
                  ?>
                  <div>
                    <select class="form-control" name="year">
                      <option value="2017">2017</option>
                    </select>
                    <select class="form-control" name="eob">
                      <option value="department-of-electronics">Department Of Electronics</option>
                    </select>
                    <select class="form-control" name="evtName">
                      <option value="fail">Select a Event</option>
                      <?php
                      // preparing data
                      $eob='department-of-electronics';
                      $year='2017';
                      //for checking existance of Quiz
                      $chkQuiz="SELECT user_id FROM winners WHERE event_name='quiz' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resQuiz=mysql_query($chkQuiz);
                      $countQuiz=mysql_num_rows($resQuiz);
                      if ($countQuiz<3)
                      {
                        ?>
                          <option value="quiz">Quiz</option>
                        <?php
                      }
                      //for checking existance of Circuit Designing
                      $chkCircuit="SELECT user_id FROM winners WHERE event_name='circuit-designing' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resCircuit=mysql_query($chkCircuit);
                      $countCircuit=mysql_num_rows($resCircuit);
                      if ($countCircuit<3)
                      {
                        ?>
                          <option value="circuit-designing">Circuit Designing</option>
                        <?php
                      }
                      //for checking existance of Rangoli
                      $chkRangoli="SELECT user_id FROM winners WHERE event_name='rangoli' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resRangoli=mysql_query($chkRangoli);
                      $countRangoli=mysql_num_rows($resRangoli);
                      if ($countRangoli<3)
                      {
                        ?>
                          <option value="rangoli">Rangoli</option>
                        <?php
                      }
                      //for checking existance of Art Gallery
                      $chkArt="SELECT user_id FROM winners WHERE event_name='artgallery' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resArt=mysql_query($chkArt);
                      $countArt=mysql_num_rows($resArt);
                      if ($countArt<3)
                      {
                        ?>
                          <option value="artgallery">Art Gallery</option>
                        <?php
                      }
                      //for checking existance of Tech Roadies
                      $chkTechRoadies="SELECT user_id FROM winners WHERE event_name='tech-roadies' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resTechRoadies=mysql_query($chkTechRoadies);
                      $countTechroadies=mysql_num_rows($resTechRoadies);
                      if ($countTechroadies<3)
                      {
                        ?>
                          <option value="tech-roadies">Tech Roadies</option>
                        <?php
                      }
                      //for checking existance of JAM
                      $chkJAM="SELECT user_id FROM winners WHERE event_name='just-a-minute' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resJAM=mysql_query($chkJAM);
                      $countJAM=mysql_num_rows($resJAM);
                      if ($countJAM<3)
                      {
                        ?>
                          <option value="just-a-minute">JAM</option>
                        <?php
                      }
                      //for checking existance of Nail painting
                      $chkNail="SELECT user_id FROM winners WHERE event_name='nail-painting' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resNail=mysql_query($chkNail);
                      $countNail=mysql_num_rows($resNail);
                      if ($countNail<3)
                      {
                        ?>
                          <option value="nail-painting">Nail painting</option>
                        <?php
                      }
                      //for checking existance of NFS
                      $chkNFS="SELECT user_id FROM winners WHERE event_name='nfs' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resNFS=mysql_query($chkNFS);
                      $countNFS=mysql_num_rows($resNFS);
                      if ($countNFS<3)
                      {
                        ?>
                          <option value="nfs">NFS</option>
                        <?php
                      }
                      //for checking existance of FIFA
                      $chkNail="SELECT user_id FROM winners WHERE event_name='nail-painting' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resNail=mysql_query($chkNail);
                      $countNail=mysql_num_rows($resNail);
                      if ($countNail<3)
                      {
                        ?>
                          <option value="fifa">FIFA</option>
                        <?php
                      }
                      //for checking existance of Poster Presentation
                      $chkPoster="SELECT user_id FROM winners WHERE event_name='poster-presentation' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resPoster=mysql_query($chkPoster);
                      $countPoster=mysql_num_rows($resPoster);
                      if ($countPoster<3)
                      {
                        ?>
                          <option value="poster-presentation">Poster Presentation</option>
                        <?php
                      }
                      //for checking existance of Paper Presentation
                      $chkPaper="SELECT user_id FROM winners WHERE event_name='paper-presentation' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resPaper=mysql_query($chkPaper);
                      $countPaper=mysql_num_rows($resPaper);
                      if ($countPaper<3)
                      {
                        ?>
                          <option value="paper-presentation">Paper Presentation</option>
                        <?php
                      }
                      //for checking existance of Singing
                      $chkSinging="SELECT user_id FROM winners WHERE event_name='singing' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resSinging=mysql_query($chkSinging);
                      $countSinging=mysql_num_rows($resSinging);
                      if ($countSinging<3)
                      {
                        ?>
                          <option value="singing">Singing</option>
                        <?php
                      }
                      //for checking existance of Stunt
                      $chkStunt="SELECT user_id FROM winners WHERE event_name='stunt' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resStunt=mysql_query($chkStunt);
                      $countStunt=mysql_num_rows($resStunt);
                      if ($countStunt<3)
                      {
                        ?>
                          <option value="stunt">Stunt</option>
                        <?php
                      }
                      //for checking existance of Treasure Hunt
                      $chkTreasure="SELECT user_id FROM winners WHERE event_name='treasure-hunt' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resTreasure=mysql_query($chkTreasure);
                      $countTreasure=mysql_num_rows($resTreasure);
                      if ($countTreasure<3)
                      {
                        ?>
                          <option value="treasure-hunt">Treasure Hunt</option>
                        <?php
                      }
                      //for checking existance of Line Follower
                      $chkLine="SELECT user_id FROM winners WHERE event_name='line-follower' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resLine=mysql_query($chkLine);
                      $countLine=mysql_num_rows($resLine);
                      if ($countLine<3)
                      {
                        ?>
                          <option value="line-follower">Line Follower</option>
                        <?php
                      }
                      //for checking existance of Task Master
                      $chkTask="SELECT user_id FROM winners WHERE event_name='task-master' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resTask=mysql_query($chkTask);
                      $countTask=mysql_num_rows($resTask);
                      if ($countTask<3)
                      {
                        ?>
                          <option value="task-master">Task Master</option>
                        <?php
                      }
                      //for checking existance of Mini Militia
                      $chkMini="SELECT user_id FROM winners WHERE event_name='mini-militia' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resMini=mysql_query($chkMini);
                      $countMini=mysql_num_rows($resMini);
                      if ($countMini<3)
                      {
                        ?>
                          <option value="mini-militia">Mini Militia</option>
                        <?php
                      }
                      //for checking existance of Painting
                      $chkPainting="SELECT user_id FROM winners WHERE event_name='painting' AND work_as='leader' AND year='$year' AND eob='$eob'";
                      $resPainting=mysql_query($chkPainting);
                      $countPainting=mysql_num_rows($resPainting);
                      if ($countPainting<3)
                      {
                        ?>
                          <option value="painting">Painting</option>
                        <?php
                      }
                      ?>
                    </select>
                    <span style="color: red;"><?php echo "$errMsg"; ?></span>
                    <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
                    </div>
                <?php
                } 
                else
                {
                  ?>
                  <div>
                    <input type="text" name="year" value="<?php echo $year; ?>" class="form-control" readonly>
                    <input type="text" name="eob" value="<?php echo $eob; ?>" class="form-control" readonly>
                    <input type="text" name="evtName" value="<?php echo $evtName; ?>" class="form-control" readonly>
                  <?php
                  if ($evtName=="artgallery"||$evtName=="tech-roadies"||$evtName=="just-a-minute"||$evtName=="nail-painting"||$evtName=="nfs"||$evtName=="fifa") 
                  {
                    ?>
                    <input type="text" name="roll_no" class="form-control" placeholder="Enter Roll No" required autofocus>
                    <input type="text" name="group_name" value="not-required" style="display: none;">
                    <?php
                  }
                  else
                  {
                    ?>
                    <input type="text" name="group_name" class="form-control" placeholder="Enter Group Name" required autofocus>
                    <input type="text" name="roll_no" value="not-required" style="display: none;">
                    <?php
                  }
                  ?>
                    <select class="form-control" name="position">
                    <?php
                      //for checking the existance of first , second and third
                      // preparing query for first 
                      $chkFirst="SELECT user_id FROM winners WHERE event_name='$evtName' AND year='$year' AND eob='$eob' AND work_as='leader' AND position='first'";
                      $resFirst=mysql_query($chkFirst);
                      $conutFirst=mysql_num_rows($resFirst);
                      if (!($conutFirst>0))
                      {
                        ?>
                          <option value="first">First</option>
                        <?php
                      }
                      // preparing query for second 
                      $chkSecond="SELECT user_id FROM winners WHERE event_name='$evtName' AND year='$year' AND eob='$eob' AND work_as='leader' AND position='second'";
                      $resSecond=mysql_query($chkSecond);
                      $conutSecond=mysql_num_rows($resSecond);
                      if (!($conutSecond>0))
                      {
                          ?>
                            <option value="second">Second</option>
                          <?php
                      }
                      // preparing query for third
                      $chkThird="SELECT user_id FROM winners WHERE event_name='$evtName' AND year='$year' AND eob='$eob' AND work_as='leader' AND position='third'";
                      $resThird=mysql_query($chkThird);
                      $conutThird=mysql_num_rows($resThird);
                      if (!($conutThird>0))
                      {
                          ?>
                            <option value="third">Third</option>
                          <?php
                      }
                    ?>
                    </select>
                    <input type="submit" name="wnrSubmit" value="Submit" class="btn btn-lg btn-primary btn-block">
                  </div>
                  <?php
                }
              ?>
                </form>
              </div>
   		 </div><!-- /.container -->
		<?php
	}
/*----- results_view :-    for display the data  ------*/
  function results_view()
  {
    extract($_REQUEST);
    ?>
      <h1 align="center" class="btn-danger">Karyaneeti Results View</h1>
    <?php
    // preparing select query for results_view
    $view="SELECT roll_no,first_name,last_name,event_name,group_name,mobile,email,position FROM winners";
    $viewRes=mysql_query($view);
    $count=mysql_num_rows($viewRes);
    if ($count>0) 
    {
      ?>
      <table width="100%">
        <thead>
          <tr>
            <th>SN</th>
            <th>Event Name</th>
            <th>Roll No.</th>
            <th>Name</th>
            <th>Position</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Group Name</th>
          </tr>
        </thead>
        <tbody>
      <?php
      $i=1;
      while ($row=mysql_fetch_assoc($viewRes)) 
      {
        ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo strtoupper($row['event_name']); ?></td>
          <td><?php echo strtoupper($row['roll_no']); ?></td>
          <td><?php echo strtoupper($row['first_name'])." ".strtoupper($row['last_name']); ?></td>
          <td><?php echo strtoupper($row['position']); ?></td>
          <td><?php echo $row['mobile']; ?></td>
          <td><?php echo strtoupper($row['email']); ?></td>
          <td><?php echo strtoupper($row['group_name']); ?></td>
        </tr>
        <?php
        $i++;
      }
        ?>
        </tbody>
        <tfoot>
          <tr>
            <th style="text-align: center;" colspan="8">DB by onsi.in</th>
          </tr>
        </tfoot>
      </table>
        <?php
    }
    else
    {
      ?>
      <span>
        <p style="background-color: #112200; text-align: center;color: #ff0000; font-size: 35px;">Sorry<br/>No, Records founds</p>
      </span>
      <?php
    }
  }
/*----- function ----  Zone   End----*/
/*----- data submited to database----*/
/*----- for checking existance and inserted data------*/
extract($_REQUEST);
if ((isset($wnrSubmit))&&(!empty($wnrSubmit)))
{
  //formating data
  $year=format_set($year);
  $eob=format_set($eob);
  $position=format_set($position);
  $evtName=format_set($evtName);
  if ($roll_no=="not-required")
  {
    // for group events
    $group_name=format_set($group_name);
    /* preparing select query for checking the existance of group name in the given event */
    $select="SELECT roll_no,first_name,last_name,email,mobile,eob,work_as,event_name,group_name,year FROM function WHERE group_name='$group_name' AND year='$year' AND event_name='$evtName' AND eob='$eob'";
    echo "<br>$select";
    $res=mysql_query($select);
    $count=mysql_num_rows($res);
    if ($count>0)
    {
      // for group events
      $group_name=format_set($group_name);
      while ($row=mysql_fetch_assoc($res)) 
      {
        $roll_no=$row['roll_no'];
        $group_name=$row['group_name'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $eob=$row['eob'];
        $work_as=$row['work_as'];
        $event_name=$row['event_name'];
        $year=$row['year'];
        // preparing query to the existance of winner in winners table for given data
        $chkSelect="SELECT user_id FROM winners WHERE roll_no='$roll_no' AND group_name='$group_name' AND event_name='$evtName' AND year='$year' AND eob='$eob'";
        echo "<br>$chkSelect";
        $chkRes=mysql_query($chkSelect);
        echo "<br>$chkRes";
        if ($chkRes!=0) 
        {
          $chkCount=mysql_num_rows($chkRes);
        }
        else
        {
          $chkCount=(-1);
        }
        if ($chkCount>0)
        {
          /*  --- for alredy existance of data in winners table --   */
          ?>
          <script type="text/javascript">
            alert('This roll no. is already registerd for this event');
          </script>
          <?php
        }
        else
        {
         // preparing insert query for winners
          $insert="INSERT INTO winners(roll_no,first_name,last_name,email,mobile,eob,work_as,group_name,event_name,year,position) values('$roll_no','$first_name','$last_name','$email','$mobile','$eob','$work_as','$group_name','$event_name','$year','$position')";
          echo "<br>$insert";
          $chk=mysql_query($insert);
        }
      }
      if ($chk)
      {
        /*  --- for successfully inserted the data  --   */
        ?>
          <script type="text/javascript">
            alert('successfully registerd');
           window.location="results.php?results="+"<?php echo $results; ?>";
         </script>
       <?php
      }
    }
    else
    {
      /*  --- for non existance of data in function table --   */
      ?>
        <script type="text/javascript">
          alert('This group_name is not available @ GIETKARYANEETI Database');
        </script>
      <?php
    }
  }
  else
  {
    // for individual events
    $roll_no=format_set($roll_no);
    /* preparing select query for checking the existance of roll-no. in the given event */
    $select="SELECT roll_no,first_name,last_name,email,mobile,eob,work_as,event_name,year FROM function WHERE roll_no='$roll_no' AND year='$year' AND event_name='$evtName' AND eob='$eob'";
    echo "<br>$select";
    $res=mysql_query($select);
    $count=mysql_num_rows($res);
    if ($count>0)
    {
      $row=mysql_fetch_assoc($res);
      $roll_no=$row['roll_no'];
      $first_name=$row['first_name'];
      $last_name=$row['last_name'];
      $email=$row['email'];
      $mobile=$row['mobile'];
      $eob=$row['eob'];
      $work_as=$row['work_as'];
      $event_name=$row['event_name'];
      $year=$row['year'];
      // preparing query to the existance of winner in winners table for given data
      $chkSelect="SELECT user_id FROM winners WHERE roll_no='$roll_no' AND event_name='$evtName' AND year='$year' AND eob='$eob'";
      echo "<br>$chkSelect";
      $chkRes=mysql_query($chkSelect);
      echo "<br>$chkRes";
      if ($chkRes!=0) 
      {
        $chkCount=mysql_num_rows($chkRes);
      }
      else
      {
        $chkCount=(-1);
      }
      if ($chkCount>0)
      {
        /*  --- for alredy existance of data in winners table --   */
        ?>
        <script type="text/javascript">
          alert('This roll no. is already registerd for this event');
        </script>
        <?php
      }
      else
      {
       // preparing insert query for winners
        $insert="INSERT INTO winners(roll_no,first_name,last_name,email,mobile,eob,work_as,event_name,year,position) values('$roll_no','$first_name','$last_name','$email','$mobile','$eob','$work_as','$event_name','$year','$position')";
        echo "<br>$insert";
        $chk=mysql_query($insert);
        if ($chk)
        {
          /*  --- for successfully inserted the data  --   */
          ?>
            <script type="text/javascript">
              alert('successfully registerd');
              window.location="results.php?results="+"<?php echo $results; ?>";
            </script>
          <?php
        }
      }
    }
    else
    {
      /*  --- for non existance of data in function table --   */
      ?>
        <script type="text/javascript">
          alert('This roll no. is not available @ GIETKARYANEETI Database');
        </script>
      <?php
    }
  }
}
/* ------- for string formating ---*/
function format_set($str)
  {
      return(trim(strtolower(strip_tags($str))));
  }
?>