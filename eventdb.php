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
    if (($header_name=="santosh")&&($header_email=="onsihero@gmail.com")||($header_name=="subrajit")&&($header_email=="hodaei@giet.edu"))
    {
      $access=true;//For Adimin Level Aceess
    }
    else
    {
      $access=false;//For Othe Level Aceess
    }
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
  <title>Event Database | GietKaryaneeti.in | ECE | AEI | GIET,Gunupur</title>
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
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <style type="text/css">
      table
      {
        width: 100%;
      }
      table,td,tr,th
      {
        border: 2px solid #000;
        text-align: center;
      }
      thead,tfoot
      {
        background-color: #232;
        color: #fff;
        font-size: 15px;
        font-family: tahoma;
      }
      td
      {
        font-family: tahoma;
        font-size: 23px;
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
              <li class="active"><a href="eventdb.php">View Event DB</a></li>
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
  <section>
    <div class="container">
    <!--===================== add your data ========================-->
<?php
extract($_REQUEST);
  if (!(isset($event)&&(!(empty($event)))))
  {
    ?>
    <script type="text/javascript">
      window.location="event.php";
    </script>
    <?php
  }
  else
  {
    $event=base64_decode($event);
    switch ($event)
    {
      case 'quiz': ?>
      <!-- ==========================================for Quiz=================================== -->
                <div id="quiz">
                  <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_2('quiz');
                    }
                    else
                    {
                      registerd_2('quiz');
                    }
                    ?>
                  </div>
                </div>
              <?php
        break;
      case 'circuit-designing': ?>
                    <!-- ==============for Circuit Designing======== -->
                <div id="circuit-designing">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_2('circuit-designing');
                    }
                    else
                    {
                      registerd_2('circuit-designing');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'treasure-hunt': ?>
                    <!-- ==========================================for Treasure Hunt=================================== -->
                <div id="treasure-hunt">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_4('treasure-hunt');
                    }
                    else
                    {
                      registerd_4('treasure-hunt');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'painting': ?>
                  <!-- =============for painting =============== -->
                <div id="painting">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_3('painting');
                    }
                    else
                    {
                      registerd_3('painting');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'rock-band': ?>
                  <!-- =========for rock-band============= -->
                <div id="rock-band">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_5('rock-band');
                    }
                    else
                    {
                      registerd_5('rock-band');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'comedy': ?>
                  <!-- ==========================================for comedy=================================== -->
                <div id="comedy">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_2_optional('comedy');
                    }
                    else
                    {
                      registerd_2_optional('comedy');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'magic': ?>
                  <!-- ===================for magic============ -->
                <div id="magic">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_2_optional('magic');
                    }
                    else
                    {
                      registerd_2_optional('magic');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'stunt': ?>
                  <!-- ==========================================for stunt=================================== -->
                <div id="stunt">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_2_optional('stunt');
                    }
                    else
                    {
                      registerd_2_optional('stunt');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'artgallery': ?>
                  <!-- ==========================================for Artgallery=================================== -->
                <div id="artgallery">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_1('artgallery');
                    }
                    else
                    {
                      registerd_1('artgallery');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'nfs': ?>
                  <!-- ==========================================for NFS=================================== -->
                <div id="nfs">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_1('nfs');
                    }
                    else
                    {
                      registerd_1('nfs');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'mini-militia': ?>
                  <!-- =========for mini militia =============== -->
                <div id="mini-militia">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_3('mini-militia');
                    }
                    else
                    {
                      registerd_3('mini-militia');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'fifa': ?>
                  <!-- ==========================================for NFS=================================== -->
                <div id="fifa">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_1('fifa');
                    }
                    else
                    {
                      registerd_1('fifa');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'tech-roadies': ?>
                  <!-- ==========================================for Tech-Roadies=================================== -->
                <div id="tech-roadies">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_1('tech-roadies');
                    }
                    else
                    {
                      registerd_1('tech-roadies');
                    }
                    ?>
                  </div>
                </div>
                <?php
      break;
      case 'dancing': ?>
                  <!-- ==========================================for Dancing=================================== -->
                <div id="dancing">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_5('dancing');
                    }
                    else
                    {
                      registerd_5('dancing');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'poster-presentaion': ?>
                  <!-- ======for Poster-Presentaion==================== -->
                <div id="poster-presentaion">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_2_optional('poster-presentation');
                    }
                    else
                    {
                      registerd_2_optional('poster-presentation');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'paper-presentaion': ?>
                  <!-- ==============for Paper-Presentaion=============== -->
                <div id="paper-presentaion">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_2_optional('paper-presentation');
                    }
                    else
                    {
                      registerd_2_optional('paper-presentation');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'just-a-minute': ?>
                  <!-- =========for Just-A-Minute========== -->
                <div id="just-a-minute">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_1('just-a-minute');
                    }
                    else
                    {
                      registerd_1('just-a-minute');
                    }
                    ?>
                  </div>
                </div>
                <?php
      break;
      case 'nail-painting': ?>
                  <!-- ==========================================for 'Nail-Painting=================================== -->
                <div id="nail-painting">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_1('nail-painting');
                    }
                    else
                    {
                      registerd_1('nail-painting');
                    }
                    ?>
                  </div>
                </div>
                <?php
      break;
      case 'rangoli': ?>
                    <!-- ==============for rangoli======== -->
                <div id="rangoli">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_2('rangoli');
                    }
                    else
                    {
                      registerd_2('rangoli');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'singing': ?>
                  <!-- ==========================================for Singing=================================== -->
                <div id="singing">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_2_optional('singing');
                    }
                    else
                    {
                      registerd_2_optional('singing');
                    }
                    ?>
                  </div>
                </div>
                <?php
      break;
      case 'line-follower': ?>
                  <!-- =========  forline-followers =========== -->
                <div id="robotics">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_4('line-follower');
                    }
                    else
                    {
                      registerd_4('line-follower');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'task-master': ?>
                  <!-- ==========================================forline-followers=================================== -->
                <div id="robotics">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_4('task-master');
                    }
                    else
                    {
                      registerd_4('task-master');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      case 'groupie': ?>
                  <!-- ==========================================for groupie====================== -->
                <div id="robotics">
                <div class="container" align="center">
                    <?php
                    if ($access)
                    {
                      registerd_4('groupie');
                    }
                    else
                    {
                      registerd_4('groupie');
                    }
                    ?>
                  </div>
                </div>
                    <?php
      break;
      default:
              ?>
              <script type="text/javascript">
                window.location="signin.php";
              </script>
              <?php
        break;
    }
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
}//session true terminated
else
{
  header("Location: signin.php");
}//session false terminated
/*--------------------------function Zone------------------------------*/
//------------  View office start  for single people-------------------
function registerd_1($event_name)
{
  $event_name_back=$event_name;
  $event_name="'".$event_name."'";
  ?>
      <h2 align="center" style="background-color: #000;color: #ffffff;"><?php echo strtoupper($event_name_back); ?></h2>
    <?php
        //work area
        include("connect_online.php");
        //stablising db connection
          $test=mysql_connect($hostname,$username,$pwd);
          if ($test)
          {
            //selecting database
            $test_db=mysql_select_db($db);
            //preparing select Query

            $select="SELECT user_id,first_name,last_name,mobile,email,roll_no FROM function WHERE event_name=$event_name AND year='2017' AND eob='department-of-electronics' ORDER BY roll_no";
            $res=mysql_query($select);
            $count=mysql_num_rows($res);
            if ($count>0)
            {
              ?>
              <div>
                <table>
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Roll No</th>
                      <th>Name</th>
            <!--          <th>Email</th>
                      <th>Mobile</th>   -->
                      <th>Signature</th>
                    </tr>
                  </thead>
                  <tbody>
              <?php
              $i=1;
              //looping
              while ($row=mysql_fetch_assoc($res))
              {
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td class="txtRoll"><?php echo $row['roll_no']; ?></td>
                      <td class="txtName"><?php echo $row['first_name']." ".$row['last_name']; ?></td>
              <!--        <td class="txtEmail"><?php echo $row['email']; ?></td>
                      <td class="txtMobile"><?php echo $row['mobile']; ?></td>           -->
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <?php
                    $i++;
              }
              ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="text-align: center;" colspan="6">DB by onsi.in</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
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
  }
//------------  office start  double people with optional -------------------
function registerd_2_optional($event_name)
{
  $event_name_back=$event_name;
  $event_name="'".$event_name."'";
  ?>
      <h2 align="center" style="background-color: #000;color: #ffffff;"><?php echo strtoupper($event_name_back); ?></h2>
    <?php
        //work area
        include("connect_online.php");
        //stablising db connection
          $test=mysql_connect($hostname,$username,$pwd);
          if ($test)
          {
            //selecting database
            $test_db=mysql_select_db($db);
            //preparing select Query
            $select="SELECT user_id,roll_no,first_name,last_name,work_as,group_name,mobile,email FROM function WHERE event_name=$event_name AND year='2017' AND eob='department-of-electronics'";
            $res=mysql_query($select);
            $count=mysql_num_rows($res);
            if ($count>0)
            {
              ?>
              <div>
                <table>
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Group</th>
                      <th>Roll No</th>
                      <th>Name</th>
            <!--          <th>Email</th>
                      <th>Mobile</th>   -->
                      <th>Signature</th>
                    </tr>
                  </thead>
                  <tbody>
              <?php
              $i=1;
              //looping
              while ($row=mysql_fetch_assoc($res))
              {
                ?>
                    <tr>
                          <td><?php echo $i; ?></td>
                          <td class="txtGroup"><span id="group_name<?php echo $row['user_id']; ?>"><?php echo $row['group_name']; ?></span></td>
                          <td class="txtRoll"><?php echo $row['roll_no']; ?></td>
                          <td class="txtName"><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                <!--          <td class="txtEmail"><?php echo $row['email']; ?></td>
                          <td class="txtMobile"><?php echo $row['mobile']; ?></td>  -->
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                <?php
                $i++;
              }
              ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="text-align: center;" colspan="7">DB by onsi.in</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
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
}//------------------ View office End for double people with optional---------------
//------------  office start  double people -------------------
function registerd_2($event_name)
{
$event_name_back=$event_name;
$event_name="'".$event_name."'";
?>
    <h2 align="center" style="background-color: #000;color: #ffffff;"><?php echo strtoupper($event_name_back); ?></h2>
  <?php
      //work area
      include("connect_online.php");
      //stablising db connection
        $test=mysql_connect($hostname,$username,$pwd);
        if ($test)
        {
          //selecting database
          $test_db=mysql_select_db($db);
          //preparing select Query
          $select="SELECT user_id,roll_no,first_name,last_name,work_as,group_name,mobile,email FROM function WHERE event_name=$event_name AND year='2017' AND eob='department-of-electronics'";
          $res=mysql_query($select);
          $count=mysql_num_rows($res);
          if ($count>0)
          {
            ?>
            <div>
              <table>
                <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Group</th>
                    <th>Roll No</th>
                    <th>Name</th>
                <!--    <th>Email</th>
                    <th>Mobile</th>            -->
                    <th>Signature</th>
                  </tr>
                </thead>
                <tbody>
            <?php
            $i=1;
            //looping
            while ($row=mysql_fetch_assoc($res))
            {
              ?>
                  <tr>
                    <?php
                     if ($row['work_as']=='leader')
                     {
                       ?>
                        <td rowspan="2"><?php echo $i; ?></td>
                        <td class="txtGroup" rowspan="2"><span id="group_name<?php echo $row['user_id']; ?>"><?php echo $row['group_name']; ?></span></td>
                       <?php
                     }
                    ?>
                    <td class="txtRoll"><?php echo $row['roll_no']; ?></td>
                    <td class="txtName"><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                    <?php
                      if ($row['work_as']=='leader')
                      {
                        ?>
                  <!--      <td class="txtEmail" rowspan="2"><?php echo $row['email']; ?></td>
                        <td class="txtMobile" rowspan="2"><?php echo $row['mobile']; ?></td>              -->
                        <td rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <?php
                      }
                    ?></tr>
                  <?php
                  if ($row['work_as']=='member')
                  {
                    $i++;
                  }
            }
            ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th style="text-align: center;" colspan="7">DB by onsi.in</th>
                  </tr>
                </tfoot>
              </table>
            </div>
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
}//------------------ View office End for double people ---------------
//------------  office start  three people -------------------
function registerd_3($event_name)
{
  $event_name_back=$event_name;
  $event_name="'".$event_name."'";
  ?>
      <h2 align="center" style="background-color: #000;color: #ffffff;"><?php echo strtoupper($event_name_back); ?></h2>
    <?php
        //work area
        include("connect_online.php");
        //stablising db connection
          $test=mysql_connect($hostname,$username,$pwd);
          if ($test)
          {
            //selecting database
            $test_db=mysql_select_db($db);
            //preparing select Query
            $select="SELECT user_id,first_name,last_name,group_name,work_as,roll_no,email,mobile FROM function WHERE event_name=$event_name AND year='2017' AND eob='department-of-electronics'";
            $res=mysql_query($select);
            $count=mysql_num_rows($res);
            if ($count>0)
            {
              ?>
              <div>
                <table>
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Group</th>
                      <th>Roll No</th>
                      <th>Name</th>
            <!--          <th>Email</th>
                      <th>Mobile</th>             -->
                      <th>Signature</th>
                    </tr>
                  </thead>
                  <tbody>
              <?php
              $i=1;
              //looping
              while ($row=mysql_fetch_assoc($res))
              {
                ?>
                    <tr>
                  <?php
                  if ($row['work_as']=='leader')
                  {
                    ?>
                      <td rowspan="3"><?php echo $i; ?></td>
                      <td class="txtGroup" rowspan="3"><span id="group_name<?php echo $row['user_id']; ?>"><?php echo $row['group_name']; ?></span></td>
                    <?php
                  }
                  ?>
                      <td class="txtRoll"><?php echo $row['roll_no']; ?></td>
                      <td class="txtName"><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                  <?php
                  if ($row['work_as']=='leader')
                  {
                    ?>
              <!--        <td class="txtEmail" rowspan="3"><?php echo $row['email']; ?></td>
                      <td class="txtMobile" rowspan="3"><?php echo $row['mobile']; ?></td>                  -->
                      <td rowspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <?php
                  }
                  ?>
                    </tr>
                <?php
                if ($row['work_as']=='leader')
                {
                 $i++;
                }
              }
              ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="text-align: center;" colspan="7">DB by onsi.in</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
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
}//------------------ View office End for three people--------------
//------------  office start  four people -------------------
function registerd_4($event_name)
{
  $event_name_back=$event_name;
  $event_name="'".$event_name."'";
  ?>
      <h2 align="center" style="background-color: #000;color: #ffffff;"><?php echo strtoupper($event_name_back); ?></h2>
    <?php
        //work area
        include("connect_online.php");
        //stablising db connection
          $test=mysql_connect($hostname,$username,$pwd);
          if ($test)
          {
            //selecting database
            $test_db=mysql_select_db($db);
            //preparing select Query
            $select="SELECT user_id,first_name,last_name,roll_no,work_as,mobile,email,group_name FROM function WHERE event_name=$event_name AND year='2017' AND eob='department-of-electronics'";
            $res=mysql_query($select);
            $count=mysql_num_rows($res);
            if ($count>0)
            {
              ?>
              <div>
                <table>
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Group</th>
                      <th>Roll No</th>
                      <th>Name</th>
              <!--        <th>Email</th>
                      <th>Mobile</th>           -->
                      <th>Signature</th>
                    </tr>
                  </thead>
                  <tbody>
              <?php
              $i=1;
              //looping
              while ($row=mysql_fetch_assoc($res))
              {
                ?>
                    <tr>
                      <?php
                       if ($row['work_as']=='leader')
                       {
                         ?>
                            <td rowspan="4"><?php echo $i; ?></td>
                            <td rowspan="4" class="txtGroup"><span id="group_name<?php echo $row['user_id']; ?>"><?php echo $row['group_name']; ?></span></td>
                         <?php
                       }
                      ?>
                      <td class="txtRoll"><?php echo $row['roll_no']; ?></td>
                      <td class="txtName"><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                        <?php
                         if ($row['work_as']=='leader')
                         {
                           ?>
                 <!--        <td class="txtEmail" rowspan="4"><?php echo $row['email']; ?></td>
                         <td rowspan="4" class="txtMobile"><?php echo $row['mobile']; ?></td>        -->
                         <td rowspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                       <?php
                         }
                        ?>
                      </tr>
                  <?php
                   if ($row['work_as']=='leader')
                   {
                     $i++;
                   }
                }
              ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="text-align: center;" colspan="7">DB by onsi.in</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
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
}//------------------ View office End for four people--------------
//------------  office start  five people -------------------
function registerd_5($event_name)
{
  $event_name_back=$event_name;
  $event_name="'".$event_name."'";
  ?>
      <h2 align="center" style="background-color: #000;color: #ffffff;"><?php echo strtoupper($event_name_back); ?></h2>
    <?php
        //work area
        include("connect_online.php");
        //stablising db connection
          $test=mysql_connect($hostname,$username,$pwd);
          if ($test)
          {
            //selecting database
            $test_db=mysql_select_db($db);
            //preparing select Query
            $select="SELECT user_id,first_name,last_name,mobile,email,group_name,work_as,roll_no FROM function WHERE event_name=$event_name AND year='2017' AND eob='department-of-electronics'";
            $res=mysql_query($select);
            $count=mysql_num_rows($res);
            if ($count>0)
            {
              ?>
              <div>
                <table>
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Group</th>
                      <th>Roll No</th>
                      <th>Name</th>
                <!--      <th>Email</th>
                      <th>Mobile</th>   -->
                      <th>Signature</th>
                    </tr>
                  </thead>
                  <tbody>
              <?php
              $i=1;
              //looping
              while ($row=mysql_fetch_assoc($res))
              {
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td class="txtGroup"><span id="group_name<?php echo $row['user_id']; ?>"><?php echo $row['group_name']; ?></span></td>
                      <td class="txtRoll"><?php echo $row['roll_no']; ?></td>
                      <td class="txtName"><?php echo $row['first_name']." ".$row['last_name']; ?></td>
              <!--        <td class="txtEmail" rowspan="5"><?php echo $row['email']; ?></td>
                      <td class="txtMobile"><?php echo $row['mobile']; ?></td>     -->
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                  <?php
                $i++;
              }
              ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="text-align: center;" colspan="7">DB by onsi.in</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
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
}//------------------ View office End for five people--------------
?>
