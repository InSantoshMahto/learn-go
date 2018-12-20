<?php
  extract($_REQUEST);
  $grpTest=false;
  /*---------------------------Checking Existance For Group ------------------------*/
  if ((isset($chkGroup))&&(!(empty($chkGroup)))&&(isset($grpName))&&(!(empty($grpName)))&&(isset($evtName))&&(!(empty($evtName))))
   {
    include("connect_online.php");
    mysql_connect($hostname,$username,$pwd);
    mysql_select_db($db);
    $grpNameView=$grpName;
    $evtName="'".format_set($evtName)."'";
    $grpName="'".format_set($grpName)."'";
    $select="SELECT user_id FROM function WHERE event_name=$evtName AND group_name=$grpName";
    $res=mysql_query($select);
    $count=mysql_num_rows($res);
    if(!($count>0))
      {
        $grpTest=true;
      }
      else
      {
        ?>
        <script>
          alert("This Group Name Is Already Exist For This Event.\nPlease Try Again \nWith Another Name");
        </script>
        <?php
      }
   }
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="GietKaryaneeti.in,giet,gunpur,event in giet,Contact">
    <meta name="description" content=" This is the official Website of GIET,Gunupur for all events and functions in campus">
    <meta name="title" content="GietKaryaneeti.in">
    <meta name="author" content="GIET Gunupur">
    <link rel="icon" href="images/favicon.ico">
    <title>EventSignUP | GietKaryaneeti.in | ECE | AEI | GIET,Gunupur</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <!-- Custom styles for footer area -->
    <link rel="stylesheet" href="css/footer.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <style type="text/css">
      h2
      {
        text-align: center;
        color: #a24865;
        font-size: 35px;
      }
    </style>
  </head>
  <body>
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
            <li><a href="signin.php">Office</a></li>
            <li class="active"><a href="eventsignup.php">Eventsignup</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <section>
    <div class="container">
    <!--===================== add your data ========================-->
<?php
    $event=base64_decode($event);
    switch ($event)
    {
      case 'quiz': ?>
      <!-- ==========================================for Quiz=================================== -->
            <div id="quiz">
              <h2 class="form-signin-heading">QUIZ</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("quiz"); ?>" >
                <input type="text" name="evtName" value="quiz" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name" required><br>
                <input type="submit" name="submit_dual" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
              <?php
        break;
      case 'circuit-designing': ?>
                    <!-- ==========================================for Circuit Designing=================================== -->
                <div id="circuit-designing">
              <h2 class="form-signin-heading">Circuit-Designing</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("circuit-designing"); ?>" >
                <input type="text" name="evtName" value="circuit-designing" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name" required><br>
                <input type="submit" name="submit_dual" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
              <?php
      break;
      case 'treasure-hunt': ?>
        <!-- ==========================================for Treasure Hunt=================================== -->
                <div id="treasure-hunt">
              <h2 class="form-signin-heading">Treasure-Hunt</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("treasure-hunt"); ?>" >
                <input type="text" name="evtName" value="treasure-hunt" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label><br><br>
                <label>Member :- 1</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 2</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member2" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member2" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member2" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 3</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member3" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member3" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member3" class="form-control" placeholder="Last Name" required><br>
                <input type="submit" name="submit_four" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
              <?php
      break;
      case 'painting': ?>
                  <!-- =============for painting =============== -->
                <div id="painting">
              <h2 class="form-signin-heading">Painting</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("painting"); ?>" >
                <input type="text" name="evtName" value="painting" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label><br>
                <label>Member 1 :- </label><br>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <label>Member 2 :- </label><br>
                <input type="text" id="roll_no" name="roll_no_member2" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member2" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member2" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <input type="submit" name="submit_three" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'rock-band': ?>
                  <!-- =========for rock-band============= -->
                <div id="rock-band">
              <h2 class="form-signin-heading">Rock-Band</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("rock-band"); ?>" >
                <input type="text" name="evtName" value="rock-band" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label><br><br>
                <label>Member :- 1</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 2</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member2" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member2" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member2" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 3</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member3" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member3" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member3" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 4 (OPTIONAL)</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member4" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member4" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member4" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <input type="submit" name="submit_five" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
              <?php
      break;
      case 'comedy': ?>
                  <!-- ==========================================for comedy=================================== -->
                <div id="comedy">
              <h2 class="form-signin-heading">Comedy</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("comedy"); ?>" >
                <input type="text" name="evtName" value="comedy" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info (OPTIONAL)</label>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <input type="submit" name="submit_dual" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'magic': ?>
                  <!-- ===================for magic============ -->
                <div id="magic">
              <h2 class="form-signin-heading">Magic</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("magic"); ?>" >
                <input type="text" name="evtName" value="magic" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info (OPTIONAL)</label>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <input type="submit" name="submit_dual" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'stunt': ?>
                  <!-- ==========================================for stunt=================================== -->
                <div id="stunt">
              <h2 class="form-signin-heading">Stunt</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("stunt"); ?>" >
                <input type="text" name="evtName" value="stunt" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info (OPTIONAL)</label>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <input type="submit" name="submit_dual" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'artgallery': ?>
                    <!-- =======for Artgallery=============== -->
                <div id="artgallery">
                  <h2 class="form-signin-heading">Art Gallery</h2>
                  <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("artgallery"); ?>">
                    <input type="text" name="evtName" value="artgallery" style="display: none;">
                    <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                    <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                    <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                    <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                    <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                    <input type="submit" name="submit_single" value="Register" class="btn btn-lg btn-primary btn-block" >
                  </form>
                </div>
                <?php
      break;
      case 'nfs': ?>
                  <!-- ==========================================for NFS=================================== -->
                <div id="nfs">
                  <h2 class="form-signin-heading">NFS</h2>
                  <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("nfs"); ?>">
                    <input type="text" name="evtName" value="nfs" style="display: none;">
                    <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                    <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                    <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                    <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                    <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                    <input type="submit" name="submit_single" value="Register" class="btn btn-lg btn-primary btn-block" >
                  </form>
                </div>
                <?php
      break;
      case 'mini-militia': ?>
                  <!-- =============for mini-militia================ -->
                <div id="mini-militia">
              <h2 class="form-signin-heading">Mini-Militia</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("mini-militia"); ?>" >
                <input type="text" name="evtName" value="mini-militia" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label><br>
                <label>Member 1 :- </label><br>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name" required><br>
                <label>Member 2 :- </label><br>
                <input type="text" id="roll_no" name="roll_no_member2" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member2" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member2" class="form-control" placeholder="Last Name" required><br>
                <input type="submit" name="submit_three" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'fifa': ?>
                  <!-- ===========for fifa ========= -->
                <div id="fifa">
              <h2 class="form-signin-heading">FIFA</h2>
                  <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("fifa"); ?>">
                    <input type="text" name="evtName" value="fifa" style="display: none;">
                    <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                    <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                    <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                    <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                    <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                    <input type="submit" name="submit_single" value="Register" class="btn btn-lg btn-primary btn-block" >
                  </form>
                </div>
                <?php
      break;
      case 'tech-roadies': ?>
                  <!-- ==========================================for Tech-Roadies=================================== -->
                <div id="tech-roadies">
                  <h2 class="form-signin-heading">Tech-Roadies</h2>
                  <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("tech-roadies"); ?>">
                    <input type="text" name="evtName" value="tech-roadies" style="display: none;">
                    <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                    <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                    <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                    <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                    <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                    <input type="submit" name="submit_single" value="Register" class="btn btn-lg btn-primary btn-block" >
                  </form>
                </div>
                <?php
      break;
      case 'dancing': ?>
                  <!-- ==========================================for Dancing=================================== -->
              <div id="dancing">
              <h2 class="form-signin-heading">Dancing</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("dancing"); ?>" >
                <input type="text" name="evtName" value="dancing" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label><br><br>
                <label>Member :- 1 (OPTIONAL)</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <label>Member :- 2 (OPTIONAL)</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member2" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member2" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member2" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <label>Member :- 3 (OPTIONAL)</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member3" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member3" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member3" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <label>Member :- 4 (OPTIONAL)</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member4" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member4" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member4" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <input type="submit" name="submit_five" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
              <?php
      break;
      case 'poster-presentation': ?>
                  <!-- ==========================================for Poster-Presentaion=================================== -->
                <div id="poster-presentaion">
              <h2 class="form-signin-heading">Poster-Presentation</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("poster-presentation"); ?>" >
                <input type="text" name="evtName" value="poster-presentation" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info (OPTIONAL)</label>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <input type="submit" name="submit_dual" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'paper-presentation': ?>
                  <!-- ==========================================for Paper-Presentaion================================== -->
                <div id="paper-presentaion">
              <h2 class="form-signin-heading">Paper-Presentation</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("paper-presentation"); ?>" >
                <input type="text" name="evtName" value="paper-presentation" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info (OPTIONAL)</label>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <input type="submit" name="submit_dual" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'just-a-minute': ?>
                  <!-- ==========================================for Just-A-Minute=================================== -->
                <div id="just-a-minute">
                  <h2 class="form-signin-heading">Just-A-Minute</h2>
                  <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("just-a-minute"); ?>">
                    <input type="text" name="evtName" value="just-a-minute" style="display: none;">
                    <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                    <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                    <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                    <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                    <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                    <input type="submit" name="submit_single" value="Register" class="btn btn-lg btn-primary btn-block" >
                  </form>
                </div>
                <?php
      break;
      case 'nail-painting': ?>
                  <!-- ==========================================for 'Nail-Painting=================================== -->
                <div id="nail-painting">
                  <h2 class="form-signin-heading">Nail-Painting</h2>
                  <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("nail-painting"); ?>">
                    <input type="text" name="evtName" value="nail-painting" style="display: none;">
                    <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                    <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                    <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                    <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                    <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                    <input type="submit" name="submit_single" value="Register" class="btn btn-lg btn-primary btn-block" >
                  </form>
                </div>
                <?php
      break;
      case 'rangoli': ?>
                    <!-- ==========================================for rangoli=================================== -->
                <div id="rangoli">
              <h2 class="form-signin-heading">Rangoli</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("rangoli"); ?>" >
                <input type="text" name="evtName" value="rangoli" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name" required><br>
                <input type="submit" name="submit_dual" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
            <?php
      break;
      case 'singing': ?>
                  <!-- ==========================================for Singing=================================== -->
                <div id="singing">
              <h2 class="form-signin-heading">Singing</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("singing"); ?>" >
                <input type="text" name="evtName" value="singing" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info (OPTIONAL)</label>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No (OPTIONAL)"><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name (OPTIONAL)"><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name (OPTIONAL)"><br>
                <input type="submit" name="submit_dual" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'line-follower': ?>
                  <!-- ==========================================for line-follower=================================== -->
                <div id="line-follower">
              <h2 class="form-signin-heading">Line-Follower</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("line-follower"); ?>" >
                <input type="text" name="evtName" value="line-follower" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label><br><br>
                <label>Member :- 1</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 2</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member2" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member2" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member2" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 3</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member3" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member3" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member3" class="form-control" placeholder="Last Name" required><br>
                <input type="submit" name="submit_four" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'task-master': ?>
                  <!-- ==========================================for task-master=================================== -->
                <div id="task-master">
              <h2 class="form-signin-heading">Task-Master</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("task-master"); ?>" >
                <input type="text" name="evtName" value="task-master" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label><br><br>
                <label>Member :- 1</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 2</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member2" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member2" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member2" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 3</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member3" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member3" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member3" class="form-control" placeholder="Last Name" required><br>
                <input type="submit" name="submit_four" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
                <?php
      break;
      case 'groupie': ?>
        <!-- ===========for Groupie===== -->
                <div id="groupie">
              <h2 class="form-signin-heading">groupie</h2>
              <form class="form-signin" method="post" action="eventsignup.php?event=<?php echo base64_encode("groupie"); ?>" >
                <input type="text" name="evtName" value="groupie" style="display: none;">
              <?php
              if (!($grpTest))
              {
                ?>
                <input type="text" id="grpName" name="grpName" class="form-control" placeholder="Enter Group Name" required autofocus><br>
                <input type="submit" name="chkGroup" value="Next" class="btn btn-lg btn-primary btn-block">
              </form>
                <?php
              }
              else
              {
                ?>
                <label>Your Group Name.</label>
                <input type="text" id="grpName" name="grpName" class="form-control" value="<?php echo "$grpNameView"; ?>" readonly><br>
                <label>Group Leader Info</label>
                <input type="text" id="roll_no" name="roll_no_leader" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_leader" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_leader" class="form-control" placeholder="Last Name" required><br>
                <input type="text" id="mobile" name="mobile_leader" class="form-control" placeholder="Mobile" required><br>
                <input type="email" id="email" name="email_leader" class="form-control" placeholder="Email address" required><br>
                <label>Group Member Info</label><br><br>
                <label>Member :- 1</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member1" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member1" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member1" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 2</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member2" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member2" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member2" class="form-control" placeholder="Last Name" required><br>
                <label>Member :- 3</label><br><br>
                <input type="text" id="roll_no" name="roll_no_member3" class="form-control" placeholder="Roll No" required><br>
                <input type="text" id="first_name" name="first_name_member3" class="form-control" placeholder="First Name" required><br>
                <input type="text" id="last_name" name="last_name_member3" class="form-control" placeholder="Last Name" required><br>
                <input type="submit" name="submit_four" value="Register" class="btn btn-lg btn-primary btn-block" >
                <?php
              }
              ?>
                </form>
              </div>
              <?php
      break;
      default:
              ?>
              <script type="text/javascript">
                window.location="event.php";
              </script>
              <?php
        break;
  }
?>
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
    </div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
  //=============function area========================
  //------------- for Single ------------------------
  if ((isset($submit_single))&&(!(empty($submit_single))))
  {
    include("connect_online.php");
    mysql_connect($hostname,$username,$pwd);
    mysql_select_db($db);
      //formating data
      $evtName=format_set($evtName);
      $year="2017";
      $eob="department-of-electronics";
      $work_as_leader="leader";
      //formating data for leader
      $roll_no_leader=format_set($roll_no_leader);
      $first_name_leader=format_set($first_name_leader);
      $last_name_leader=format_set($last_name_leader);
      $email_leader=format_set($email_leader);
      $mobile_leader=format_set($mobile_leader);
      //preparing insert query for leader
     $insert_leader="INSERT INTO function(roll_no,first_name,last_name,mobile,email,event_name,year,eob,work_as) VALUES('$roll_no_leader','$first_name_leader','$last_name_leader','$mobile_leader','$email_leader','$evtName','$year','$eob','$work_as_leader')";
     //echo "<br>$insert_leader";
     //chking existance for Roll No.
    $select="SELECT user_id FROM function WHERE event_name='$evtName' AND roll_no='$roll_no_leader'";
    //echo "<br>$select";
    $res=mysql_query($select);
    $count=mysql_num_rows($res);
    if(!($count>0))
    {
     $chk1=mysql_query($insert_leader);//for leader
      if ($chk1)
      {
        success($evtName);
      }
      else
      {
        wrong();
      }
    }
    else
    {
      existance();
    }
  }
  //-------------for Dual ----------------------
  if ((isset($submit_dual))&&(!(empty($submit_dual)))&&(isset($evtName))&&(!(empty($evtName))))
  {
    include("connect_online.php");
    mysql_connect($hostname,$username,$pwd);
    mysql_select_db($db);
      //formating data
    $grpName=format_set($grpName);
    $evtName=format_set($evtName);
    $year="2017";
    $eob="department-of-electronics";
    $work_as_leader="leader";
    $work_as_member="member";
    //formating data for leader
    $roll_no_leader=format_set($roll_no_leader);
    $first_name_leader=format_set($first_name_leader);
    $last_name_leader=format_set($last_name_leader);
    $email_leader=format_set($email_leader);
    $mobile_leader=format_set($mobile_leader);
    //checking the existance of optional field
     if ($roll_no_member1==""||$roll_no_member1==" "||$roll_no_member1=="  ")
     {
        /*  for optional field is empty  */
        //preparing insert query for leader
        $insert_leader="INSERT INTO function(group_name,roll_no,first_name,last_name,mobile,email,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_leader','$first_name_leader','$last_name_leader','$mobile_leader','$email_leader','$evtName','$year','$eob','$work_as_leader')";
       //chking existance of group for dual optional
        $select="SELECT user_id FROM function WHERE event_name='$evtName' AND (roll_no='$roll_no_leader') OR (event_name='$evtName' AND group_name='$grpName')";
        $res=mysql_query($select);
        $count=mysql_num_rows($res);
        if(!($count>0))
        {
         $chk1=mysql_query($insert_leader);//for leader
          if ($chk1)
          {
          success($evtName);
          }
          else
          {
           warning();
          }
        }
        else
        {
         existance();
        }
      }
      else
      {
       /*  for optional field is Not Empty  */
       //formating data for member
       $roll_no_member1=format_set($roll_no_member1);
       $first_name_member1=format_set($first_name_member1);
       $last_name_member1=format_set($last_name_member1);
      //preparing insert query for leader
       $insert_leader="INSERT INTO function(group_name,roll_no,first_name,last_name,mobile,email,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_leader','$first_name_leader','$last_name_leader','$mobile_leader','$email_leader','$evtName','$year','$eob','$work_as_leader')";
        //preparing insert query for member
      $insert_member1="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member1','$first_name_member1','$last_name_member1','$evtName','$year','$eob','$work_as_member')";
      //chking existance of group for dual optional
       $select="SELECT user_id FROM function WHERE event_name='$evtName' AND (roll_no='$roll_no_leader' OR roll_no='$roll_no_member1') OR (event_name='$evtName' AND group_name='$grpName')";
       $res=mysql_query($select);
       $count=mysql_num_rows($res);
       if(!($count>0))
       {
       $chk1=mysql_query($insert_leader);//for leader
       $chk2=mysql_query($insert_member1);//for member
       if ($chk1&&$chk2)
        {
          success($evtName);
        }
        else
        {
         warning();
        }
       }
       else
       {
        existance();
       }
    }
  }
  //-------------for Three----------------------
  if ((isset($submit_three))&&(!(empty($submit_three)))&&(isset($evtName))&&(!(empty($evtName))))
  {
    include("connect_oNline.php");
    mysql_connect($hostname,$username,$pwd);
    mysql_select_db($db);
      //formating data
      $grpName=format_set($grpName);
      $evtName=format_set($evtName);
      $year="2017";
      $eob="department-of-electronics";
      $work_as_leader="leader";
      $work_as_member="member";
      //formating data for leader
      $roll_no_leader=format_set($roll_no_leader);
      $first_name_leader=format_set($first_name_leader);
      $last_name_leader=format_set($last_name_leader);
      $email_leader=format_set($email_leader);
      $mobile_leader=format_set($mobile_leader);
      //formating data for member1
      $roll_no_member1=format_set($roll_no_member1);
      $first_name_member1=format_set($first_name_member1);
      $last_name_member1=format_set($last_name_member1);
      //formating data for member2
      $roll_no_member2=format_set($roll_no_member2);
      $first_name_member2=format_set($first_name_member2);
      $last_name_member2=format_set($last_name_member2);
      //preparing insert query for leader
     $insert_leader="INSERT INTO function(group_name,roll_no,first_name,last_name,mobile,email,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_leader','$first_name_leader','$last_name_leader','$mobile_leader','$email_leader','$evtName','$year','$eob','$work_as_leader')";
      //preparing insert query for member1
     $insert_member1="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member1','$first_name_member1','$last_name_member1','$evtName','$year','$eob','$work_as_member')";
      //preparing insert query for member2
     $insert_member2="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member2','$first_name_member2','$last_name_member2','$evtName','$year','$eob','$work_as_member')";
     //chking existance of group for dual
    $select="SELECT user_id FROM function WHERE event_name='$evtName' AND (roll_no='$roll_no_leader' OR roll_no='$roll_no_member1') OR (event_name='$evtName' AND group_name='$grpName')";
    $res=mysql_query($select);
    $count=mysql_num_rows($res);
    if(!($count>0))
    {
     $chk1=mysql_query($insert_leader);//for leader
     $chk2=mysql_query($insert_member1);//for member1
     $chk3=mysql_query($insert_member2);//for member2
      if ($chk1&&$chk2&&$chk3)
      {
        success($evtName);
      }
      else
      {
        wrong();
      }
    }
    else
    {
      existance();
    }
  }
  //-------------for Four----------------------
  if ((isset($submit_four))&&(!(empty($submit_four)))&&(isset($evtName))&&(!(empty($evtName))))
  {
    include("connect_online.php");
    mysql_connect($hostname,$username,$pwd);
    mysql_select_db($db);
      //formating data
      $grpName=format_set($grpName);
      $evtName=format_set($evtName);
      $year="2017";
      $eob="department-of-electronics";
      $work_as_leader="leader";
      $work_as_member="member";
      //formating data for leader
      $roll_no_leader=format_set($roll_no_leader);
      $first_name_leader=format_set($first_name_leader);
      $last_name_leader=format_set($last_name_leader);
      $email_leader=format_set($email_leader);
      $mobile_leader=format_set($mobile_leader);
      //formating data for member - 1
      $roll_no_member1=format_set($roll_no_member1);
      $first_name_member1=format_set($first_name_member1);
      $last_name_member1=format_set($last_name_member1);
      //formating data for member - 2
      $roll_no_member2=format_set($roll_no_member2);
      $first_name_member2=format_set($first_name_member2);
      $last_name_member2=format_set($last_name_member2);
      //formating data for member - 3
      $roll_no_member3=format_set($roll_no_member3);
      $first_name_member3=format_set($first_name_member3);
      $last_name_member3=format_set($last_name_member3);
      //preparing insert query for leader
     $insert_leader="INSERT INTO function(group_name,roll_no,first_name,last_name,mobile,email,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_leader','$first_name_leader','$last_name_leader','$mobile_leader','$email_leader','$evtName','$year','$eob','$work_as_leader')";
      //preparing insert query for member - 1
     $insert_member1="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member1','$first_name_member1','$last_name_member1','$evtName','$year','$eob','$work_as_member')";
      //preparing insert query for member - 2
     $insert_member2="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member2','$first_name_member2','$last_name_member2','$evtName','$year','$eob','$work_as_member')";
      //preparing insert query for member - 3
     $insert_member3="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member3','$first_name_member3','$last_name_member3','$evtName','$year','$eob','$work_as_member')";
     //chking existance of group for four i.e, treasure hunt----
    $select="SELECT user_id FROM function WHERE event_name='$evtName' AND (roll_no='$roll_no_leader' OR roll_no='$roll_no_member1' OR roll_no='$roll_no_member2' OR roll_no='$roll_no_member3') OR (event_name='$evtName' AND group_name='$grpName')";
    $res=mysql_query($select);
    $count=mysql_num_rows($res);
    if(!($count>0))
    {
     $chk1=mysql_query($insert_leader);//for leader
     $chk2=mysql_query($insert_member1);//for member1
     $chk3=mysql_query($insert_member2);//for member2
     $chk4=mysql_query($insert_member3);//for member3
      if ($chk1&&$chk2&&$chk3&&$chk4)
      {
        success($evtName);
      }
      else
      {
        wrong();
      }
    }
    else
    {
      existance();
    }
  }
  //-------------for five people----------------------
  if ((isset($submit_five))&&(!(empty($submit_five)))&&(isset($evtName))&&(!(empty($evtName))))
  {
    include("connect_online.php");
    mysql_connect($hostname,$username,$pwd);
    mysql_select_db($db);
      //formating data
      $grpName=format_set($grpName);
      $evtName=format_set($evtName);
      $year="2017";
      $eob="department-of-electronics";
      $work_as_leader="leader";
      $work_as_member="member";
      //formating data for leader
      $roll_no_leader=format_set($roll_no_leader);
      $first_name_leader=format_set($first_name_leader);
      $last_name_leader=format_set($last_name_leader);
      $email_leader=format_set($email_leader);
      $mobile_leader=format_set($mobile_leader);
      //for test condition only
      $roll_no_member_test1=$roll_no_member1;
      $roll_no_member_test2=$roll_no_member2;
      $roll_no_member_test3=$roll_no_member3;
      $roll_no_member_test4=$roll_no_member4;
      //formating data for member - 1
      $roll_no_member1=format_set($roll_no_member1);
      $first_name_member1=format_set($first_name_member1);
      $last_name_member1=format_set($last_name_member1);
      //checking the existance of optional field
      //formating data for member - 2
      $roll_no_member2=format_set($roll_no_member2);
      $first_name_member2=format_set($first_name_member2);
      $last_name_member2=format_set($last_name_member2);
      //formating data for member - 3
      $roll_no_member3=format_set($roll_no_member3);
      $first_name_member3=format_set($first_name_member3);
      $last_name_member3=format_set($last_name_member3);
      //formating data for member - 4
      $roll_no_member4=format_set($roll_no_member4);
      $first_name_member4=format_set($first_name_member4);
      $last_name_member4=format_set($last_name_member4);
      //preparing insert query for leader
     $insert_leader="INSERT INTO function(group_name,roll_no,first_name,last_name,mobile,email,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_leader','$first_name_leader','$last_name_leader','$mobile_leader','$email_leader','$evtName','$year','$eob','$work_as_leader')";
      //preparing insert query for member - 1
     $insert_member1="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member1','$first_name_member1','$last_name_member1','$evtName','$year','$eob','$work_as_member')";
      //preparing insert query for member - 2
     $insert_member2="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member2','$first_name_member2','$last_name_member2','$evtName','$year','$eob','$work_as_member')";
      //preparing insert query for member - 3
     $insert_member3="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member3','$first_name_member3','$last_name_member3','$evtName','$year','$eob','$work_as_member')";
      //preparing insert query for member - 4
     $insert_member4="INSERT INTO function(group_name,roll_no,first_name,last_name,event_name,year,eob,work_as) VALUES('$grpName','$roll_no_member4','$first_name_member4','$last_name_member4','$evtName','$year','$eob','$work_as_member')";
     // --------------- checking the empty field  --------------------
      if ($roll_no_member_test1==""||$roll_no_member_test1==" "||$roll_no_member_test1=="  ")
      {
        //chking existance of group for five people ----
        $select="SELECT user_id FROM function WHERE event_name='$evtName' AND (roll_no='$roll_no_leader') OR (event_name='$evtName' AND group_name='$grpName')";
        $res=mysql_query($select);
        $count=mysql_num_rows($res);
        if(!($count>0))
        {
           $chk1=mysql_query($insert_leader);//for leader
            if ($chk1)
            {
              success($evtName);
            }
            else
            {
              wrong();
            }
        }
        else
        {
          existance();
        }
      }
      elseif ($roll_no_member_test2==""||$roll_no_member_test2==" "||$roll_no_member_test2=="  ")
      {
        //chking existance of group for five people ----
        $select="SELECT user_id FROM function WHERE event_name='$evtName' AND (roll_no='$roll_no_leader' OR roll_no='$roll_no_member1') OR (event_name='$evtName' AND group_name='$grpName')";
        $res=mysql_query($select);
        $count=mysql_num_rows($res);
        if(!($count>0))
        {
           $chk1=mysql_query($insert_leader);//for leader
           $chk2=mysql_query($insert_member1);//for member1
            if ($chk1&&$chk2)
            {
              success($evtName);
            }
            else
            {
              wrong();
            }
        }
        else
        {
          existance();
        }
      }
      elseif ($roll_no_member_test3==""||$roll_no_member_test3==" "||$roll_no_member_test3=="  ")
      {
        //chking existance of group for five people ----
        $select="SELECT user_id FROM function WHERE event_name='$evtName' AND (roll_no='$roll_no_leader' OR roll_no='$roll_no_member1' OR roll_no='$roll_no_member2') OR (event_name='$evtName' AND group_name='$grpName')";
        $res=mysql_query($select);
        $count=mysql_num_rows($res);
        if(!($count>0))
        {
           $chk1=mysql_query($insert_leader);//for leader
           $chk2=mysql_query($insert_member1);//for member1
           $chk3=mysql_query($insert_member2);//for member2
            if ($chk1&&$chk2&&$chk3&&$chk4&&$chk5)
            {
              success($evtName);
            }
            else
            {
              wrong();
            }
        }
        else
        {
          existance();
        }
      }
      elseif ($roll_no_member_test4==""||$roll_no_member_test4==" "||$roll_no_member_test4=="  ")
      {
        //chking existance of group for five people ----
        $select="SELECT user_id FROM function WHERE event_name='$evtName' AND (roll_no='$roll_no_leader' OR roll_no='$roll_no_member1' OR roll_no='$roll_no_member2' OR roll_no='$roll_no_member3') OR (event_name='$evtName' AND group_name='$grpName')";
        $res=mysql_query($select);
        $count=mysql_num_rows($res);
        if(!($count>0))
        {
           $chk1=mysql_query($insert_leader);//for leader
           $chk2=mysql_query($insert_member1);//for member1
           $chk3=mysql_query($insert_member2);//for member2
           $chk4=mysql_query($insert_member3);//for member3
            if ($chk1&&$chk2&&$chk3&&$chk4)
            {
              success($evtName);
            }
            else
            {
              wrong();
            }
        }
        else
        {
          existance();
        }
      }
      else
      {
        //chking existance of group for five people ----
        $select="SELECT user_id FROM function WHERE event_name='$evtName' AND (roll_no='$roll_no_leader' OR roll_no='$roll_no_member1' OR roll_no='$roll_no_member2' OR roll_no='$roll_no_member3' OR roll_no='$roll_no_member4') OR (event_name='$evtName' AND group_name='$grpName')";
        $res=mysql_query($select);
        $count=mysql_num_rows($res);
        if(!($count>0))
        {
           $chk1=mysql_query($insert_leader);//for leader
           $chk2=mysql_query($insert_member1);//for member1
           $chk3=mysql_query($insert_member2);//for member2
           $chk4=mysql_query($insert_member3);//for member3
           $chk5=mysql_query($insert_member4);//for member4
            if ($chk1&&$chk2&&$chk3&&$chk4&&$chk5)
            {
              success($evtName);
            }
            else
            {
              wrong();
            }
        }
        else
        {
          existance();
        }
      }
  }
  /* ------- for string formating ---*/
  function format_set($str)
  {
      return(trim(strtolower(strip_tags($str))));
  }
  /* ------------- for success ------*/
  function success($evtName)
  {
    ?>
    <script type="text/javascript">
      alert("Successfully Registerd");
      window.location="eventsignup.php?event="+"<?php echo base64_encode($evtName); ?>";
    </script>
    <?php
  }
  /* -------------- for wrong --------------------*/
  function wrong()
  {
    ?>
    <script type="text/javascript">
      alert("Something Wrong");
    </script>
    <?php
  }
  /* -----------------  for existance ----------*/
  function existance()
  {
    ?>
    <script>
      alert("These Roll no. Leader/Member Is Already Registerd For This Event.");
    </script>
    <?php
  }
?>
