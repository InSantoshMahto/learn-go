<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="GietKaryaneeti.in,giet,gunpur,event in giet">
    <meta name="description" content=" This is the official Website of GIET,Gunupur for all events and functions in campus">
    <meta name="title" content="GietKaryaneeti.in">
    <meta name="author" content="GIET Gunupur">
    <link rel="icon" href="images/favicon.ico">
    <title>EventDetails | ECE | AEI | GIET,Gunupur</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/starter.css" rel="stylesheet">
        <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet"
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- Custom styles for footer area -->
    <link rel="stylesheet" href="css/footer.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <style>
    body
    {
     background-color: #c6c9ff;
    }
     #button
     {
       height: 55px;
       width: 300px;
       padding-top: 12px;
       font-size: 20px;
     }
     blockquote
     {
       border:10px solid #f8f2f9;
       border-radius:50px;
       background-color: #f8f2f9;
     }

     #team
     {
       color: red;
     }
     #para
     {
       color: #004703;
       font-size: 17px;
       margin-left: 20px;
     }
     .b
     {
       font-size: 25px;
       font-family: gooddog;
       color: #020444;
     }
    body{
 font-family: 'Lato', sans-serif;
   ;
}
div.foo{
 width: 90%;
 margin: 0 auto;
 text-align: center;
}
.letter{
 display: inline-block;
 font-weight: 900;
 font-size: 8vw;
 position: relative;
 color: #00B4F1;
 transform-style: preserve-3d;
 perspective: 400;
 z-index: 1;
}
.letter:before, .letter:after{
 position:absolute;
 content: attr(data-letter);
 transform-origin: top left;
 top:0;
 left:0;
}
.letter, .letter:before, .letter:after{
 transition: all 0.3s ease-in-out;
}
.letter:before{
 color: #086587;
 text-shadow:
   -1px 0px 1px rgba(255,255,255,.8),
   1px 0px 1px rgba(0,0,0,.8);
 z-index: 3;
 transform:
   rotateX(0deg)
   rotateY(-15deg)
   rotateZ(0deg);
}
.letter:after{
 color: rgba(0,0,0,.11);
 z-index:2;
 transform:
   scale(1.08,1)
   rotateX(0deg)
   rotateY(0deg)
   rotateZ(0deg)
   skew(0deg,1deg);
}
.letter:hover:before{
 color: #fafafa;
 transform:
   rotateX(0deg)
   rotateY(-40deg)
   rotateZ(0deg);
}
.letter:hover:after{
 transform:
   scale(1.08,1)
   rotateX(0deg)
   rotateY(40deg)
   rotateZ(0deg)
   skew(0deg,22deg);
}
     #coordinator
     {
       color: #28001c;
     }
     #para2
     {
       font-size: 15px;
       color: #1b0142;
       text-align: center;
     }
     ol,ul
     {
      text-align: justify;
      margin-left: 25px;
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
              <li><a href="index.php">Home</a></li>
              <li><a href="event.php">Event</a></li>
              <li><a href="registration.php">Registration</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="signin.php">Office</a></li>
              <li class="active"><a href="eventdetails.php">Eventdetails</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
  </header>
<section>
<div class="container">
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
                <div id="quiz">   <!-- ==========================================for Quiz=================================== -->
              		<br>
                  <center><span class="letter" data-letter="Q">Q</span>
                  <span class="letter" data-letter="U">U</span>
                  <span class="letter" data-letter="I">I</span>
                  <span class="letter" data-letter="Z">Z</span>
                  </center>
                  <br>
          	    	<blockquote>
                  <p id="para"><b><u>1st Round</u></b><br><br>
                      1. This will be a written round.<br>
                      2. The question paper will consist of 30 questions out of which 25 questions will carry same weightage but 5 questions will be tiebreaker questions carrying more weightage.<br>
                      3. Time Duration - 30 minutes.<br><br>
                      <b><u>2nd Round</u></b><br><br>
                      1. Depending on the no. of participants the teams for the 2nd round will be chosen.<br>
                      2. It will be a Q/A (Oral) round.<br>
                      3. The questions for this round will mainly cover Current Affairs & General Awareness.<br>
                      4. As per the performance & no. of participants, teams will be formed for the 3rd round.<br><br>
                      <b><u>3rd Round</u></b><br><br>
                      1. This round will be a visual round.<br>
                      2. The questions will be from all the sections of GK.<br><br>
                      <b><u>4th Round</u></b><br><br>
                      1. This round will be a buzzer round.<br>
                      2. The one pressing the buzzer 1st will be answering the question 1st.<br>
                      3. There will only be 5 teams in this round.<br><br>
                    <div align="center"><b id="team"> **Each team will consist of 2 members irrespective of branch & year.</b><br>
                    </div>
          			</p><br>
                </blockquote>
          			<p id="para2"><b id="coordinator">Faculty Coordinatiors</b><br/>
          	               Mr. A.Amiya Gupta - 8984232545</p>
          	        <p id="para2"><b id="coordinator">Student Coordinator</b><br/>
          	              Prateek Ray - 7064103027</p><br><br>
                        <center><p><a style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("quiz"); ?>">Register Now</a></p></center>
          	    </div>
              <?php
        break;
      case 'circuit-designing': ?>
                    <!-- ==========================================for Circuit Designing=================================== -->
                    <div id="circuit-designing">
                    <br>
                      <center><span class="letter" data-letter="C">C</span>
                      <span class="letter" data-letter="I">I</span>
                      <span class="letter" data-letter="R">R</span>
                      <span class="letter" data-letter="C">C</span>
                      <span class="letter" data-letter="U">U</span>
                      <span class="letter" data-letter="I">I</span>
                      <span class="letter" data-letter="T">T</span>
                      <span class="letter" data-letter="-">-</span>
                      <span class="letter" data-letter="D">D</span>
                      <span class="letter" data-letter="E">E</span>
                      <span class="letter" data-letter="S">S</span>
                      <span class="letter" data-letter="I">I</span>
                      <span class="letter" data-letter="G">G</span>
                      <span class="letter" data-letter="N">N</span>
                      </center>
                      <br>
                      <blockquote>
                          <b><u>ROUND-1</u>&nbsp;   (Written Round)              F.M-75 Marks</b><br><br>
                           There Will be 35 question (Part-1 and Part-2)  in Round-1.<br>
                           (Part-1) There will be 30 Question of two marks. (30*2=60).<br>
                           (Part-2) There will be 5 Questions of Three Marks.(5*3=15)<br><br><br>

                          <b><u>NEGATIVE MARKING(for round 1)</u></b><br><br>
                          • In part-1 there will be 0.5 marks deducted for each wrong attempt.<br>
                          • In Part-2 there will be 1 marks deducted for each wrong attempt.<br><br><br>

                          <b><u>ROUND-2(Circuit Design Round)</u>    Time duration-1:30 hour</b><br><br>
                           One circuit will be given and all the participants have to complete it within 1 and half hours of timing.<br><br><br>
                    <div align="center"><b id="team"> **Each team will consist of 2 members irrespective of branch & year.</b><br>
                    </p><br>
                    </blockquote>
                      <p id="para2"><b>Faculty Coordinator</b><br/>
                             Mrs. Padmini Mishra - 9438470967</p>
                      <p id="para2"><b>Student Coordinator</b><br>
                             Manisha Pattanayak - 7683923397<br>Eswar Panda - 8984880143</p><br><br>
                            <center><p><a style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("circuit-designing"); ?>" >Register Now</a></p></center>
                    </div>
                    <?php
      break;
      case 'treasure-hunt': ?>
                    <!-- ==========================================for Treasure Hunt=================================== -->
                    <div id="treasure-hunt">
                      <br>
                      <center><span class="letter" data-letter="T">T</span>
                      <span class="letter" data-letter="R">R</span>
                      <span class="letter" data-letter="E">E</span>
                      <span class="letter" data-letter="A">A</span>
                      <span class="letter" data-letter="S">S</span>
                      <span class="letter" data-letter="U">U</span>
                      <span class="letter" data-letter="R">R</span>
                      <span class="letter" data-letter="E">E</span>
                      <span class="letter" data-letter="-">-</span>
                      <span class="letter" data-letter="H">H</span>
                      <span class="letter" data-letter="U">U</span>
                      <span class="letter" data-letter="N">N</span>
                      <span class="letter" data-letter="T">T</span>
                      </center>
                      <br>
                      <blockquote>
                        <p id="para"> <b id="team">  **Each treasure hunt team should have 4 members.</b><br><br>
                          •   Requirements for the events will be provided by the information desk.<br>
                          •   Each team should announce a leader at the time of registration.<br>
                          •   Each registered team will get a unique identification number on program triggering. Each team leader should pin identity card provided, while the team is on action.<br>
                          •   From round 3 onwards each team will be allotted a particular color. And all the clues for the team will be represented by that color.<br>
                          •   No team members should posses any kind of hard/soft currency, internet, electronic gadgets unless instructed to do so.<br>
                          •   The clue has to be found in a particular order. The team cannot skip a clue. Skipping a clue leads to disqualification of the team.<br>
                          •   If you found other team’s clue by chance never tamper it. Tampering other team’s clue may lead to disqualification.<br>
                          •   Do not search for clues in off-limit areas.<br>
                          •   An entire team must stay together. Do not split up to find different clues.<br>
                          •   If a team splits, it will be penalized by one   point and after 3 penalty points, team will be disqualified.<br>
                          •   Trace your team's color which will lead you to next clue.<br>
                          •   Each correctly solved clue carries 10 points.<br>
                          •   All the means used by the teams should be fair, in case of any violation of the rules or any use of unfair means, teams will be disqualified from the contest.<br>
                          •    All the clues of the teams are  different and located at different places but the final destination   i.e , the treasure is same. The team which finds the treasure first wins.<br>
                        </p><br>
                      </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                           Mr. Pramod Martha - 9439693855 </p>
                     <p id="para2"><b>Student Coordinator</b><br>
                           Sarala Rani Panda - 9438448244</p><br><br>
                            <center><p><a style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("treasure-hunt"); ?>">Register Now</a></p></center>
                    </div>
                    <?php
      break;
      case 'giet-got-talent': ?>
                    <!-- ==========================================for giet-got-talent=================================== -->
                    <div id="giet-got-talent">
                      <br>
                      <center><span class="letter" data-letter="G">G</span>
                      <span class="letter" data-letter="G">G</span>
                      <span class="letter" data-letter="T">T</span>
                      </center>
                      <br>
                      <blockquote>
                        <h2 align="center">Rules & Regulations:</h2>
                        <p>Talent doesn’t discriminate; it knows no biases, it has no preferences. It only celebrates meritocracy. Unearthing the finest and the mostastounding talent from the length and breadth of GIET is the GIET’s premier talent show, GIET Got Talent. With only ‘hunar’ taking precedence above all,the latest edition of this event will bring to you the finest and the rarest of jewels of the college who will wow the viewers with their exceptional abilities.</p>
                        <p>This is purely a talent hunt competition where various student showcase their talents individually or in groups. Each participant competes against other participant and ualifying one will proceed to next level</p>
                        <p>It is an event where participants can perform any type of song, dance, comedy acts, painting, rock bands & also other talent show events as per their convenient.</p>
                        <p>Students have to register themselves by filling their name,roll no, contact no. and email id, along with the event details what they want to perform. </p>
                        <p>After the final submission date further submission will not be entertained</p>
                        <p>For every individual or group participation a maximum of 3 minutes can be provided to each event beyond that no extra time limit can be provided.</p>
                        <p>After every round the result will be declared as per the decision of jury members. Jury members have only the right to cancel any act if non disciplinary action found. </p>
                        <h1>EVENTS:</h1>
                        <h3>Dancing</h3>
                        <blockquote>Only individual or a group performer can be allowed. (Boy & Boy, Girl & Girl).</blockquote>
                        <h3>Singing</h3>
                        <blockquote>Only individual or a group of two performer can be allowed.</blockquote>
                        <h3>Painting:</h3>
                        <blockquote>Only individual or a group performer can be allowed.</blockquote>
                        <h3>Rock Band:</h3>
                        <blockquote>Maximum of 4‐5 members can be allowed per band group including the vocalist.</blockquote>
                        <h3>Other events :</h3>
                        <blockquote>Comedy, Magic, stunt(single or Group)etc.</blockquote>
                        <p style="color: red; font-size: 25px; font-style: bold;"><span style="font-size: 30px; text-align: center; color: lime">Note :- </span><br>If You Want More Group Members Then You Can Contact To Your Event Co-ordinator And Give The Name Of Other Members .<br><span style="font-size: 20px; text-align: center; color: lime">For GGT Only</span></p>
                      </blockquote>
                      <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mrs. Bandana Mallick - 9437376161<br>
                            Mrs. Ranjita Rout - 9437843426</p>
                        <p id="para2"><b>Student Coordinator</b><br>
                        Shubhasmita Panigrahi - 8763144455</p><br><br>
                        <div style="display: none;">
                          <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("dancing"); ?>">Register For Dancing</a></p></center>
                          <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("singing"); ?>" role="button">Register For Singing</a></p></center>
                            <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("painting"); ?>">Register For Painting</a></p></center>
                            <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("rock-band"); ?>">Register For Rock Band</a></p></center>
                            <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("comedy"); ?>">Register For Comedy</a></p></center>
                            <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("magic"); ?>">Register For Magic</a></p></center>
                            <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("stunt"); ?>">Register For Stunt</a></p></center>
                          </div>
                    </div>
                    <?php
      break;
      case 'artgallery': ?>
                  <!-- ==========================================for Artgallery=================================== -->
                  <div id="artgallery">
                    <br>
                    <center><span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="R">R</span>
                    <span class="letter" data-letter="T">T</span>
                    <span class="letter" data-letter="-">-</span>
                    <span class="letter" data-letter="G">G</span>
                    <span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="L">L</span>
                    <span class="letter" data-letter="L">L</span>
                    <span class="letter" data-letter="E">E</span>
                    <span class="letter" data-letter="R">R</span>
                    <span class="letter" data-letter="Y">Y</span>
                    </center>
                    <br>
                    <blockquote>
                    <p id="para"> (Individual pantings of participants based on some social theme will
                        be shown to the management and winners will be awarded by the
                        prize)<br><br>
                        <b id="team">**Individual participants are allowed.</b><br><br>
                        <ul>
                          <li>Use of A3 size paper.</li>
                          <li>Use of craft material is not allowed.</li>
                          <li>Painting colours are only allowed for the participants.</li>
                          <li>The painting must be based on the Social theme.</li>
                          <li>The winner’s will be awarded by the prizes.</li>
                          <li>The participants can also submit the pencil art</li>
                        </ul>
                  </p><br>
                  </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mr. Ribhu Abhusan Panda - 9439847700 </p>
                          <p id="para2"><b>Student Coordinator</b><br>
                           Ankit Kumar - 8093149937</p><br><br>
                          <center><p><a style="display:none;" class="btn btn-info" id="button" href="eventsignup.php?event=<?php echo base64_encode("artgallery"); ?>" role="button">Register Now</a></p></center>
                  </div>
                <?php
      break;
      case 'gaming': ?>
                  <!-- ==========================================for Gaming=================================== -->
                  <div id="gaming">
                  <br>
                  <center>
                    <span class="letter" data-letter="G">G</span>
                    <span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="M">M</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="N">N</span>
                    <span class="letter" data-letter="G">G</span>
                    </center>
                    <br>
                    <blockquote>
                      <h3 style="color: #432fae;text-align: center;">LAN GAMING NEED FOR SPEED RULES</h3>
                      <ol type="number">
                        <li>Each race should have maximum 3 participants.</li>
                        <li>Each round will be investigated by the event organisers whether one is not following the rules. i.e.-reset means disqualified.</li>
                        <li>n20, collision damage and performance matching will be decided by the organisers.</li>
                        <li>There will be a circuit given to shortlist the number of participants. The winner of each round should proceed to the next round.</li>
                        <li>knock out races would be conducted With high traffic. The winners will qualify to the final round.</li>
                      </ol>
                    <h3 style="color: #432fae; text-align: center;">MINI MILITIA RULES</h3>
                    <ol type="number">
                      <li>Each team should have 3 members, participants can make their group.</li>
                      <li>According to the group numbers no of round should be played. Winner will be selected for the next round.</li>
                      <li>Final round will be of 15 minutes.</li>
                      <li>Stages will be decided according to the coordinator.</li>
                    </ol>
                    <h3 style="color: #432fae; text-align: center;">FIFA RULES</h3>
                    <ol type="number">
                      <li>Single player.</li>
                      <li>It will be knock out round.</li>
                      <li>Version FIFA 15.</li>
                      <li>Time limit will be 4 min per match.</li>
                      <li>Finale will be of 10 min.</li>
                      <li>Candidates must bring their own laptops.</li>
                      <li>Lan wire will be provided by the department.</li>
                    </ol>
                  </p><br>
                  </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mr. Amrit Panigrahi - 8260720850 </p>
                          <p id="para2"><b>Student Coordinator</b><br>
                           Ankit Kumar - 707758792</p><br><br>
                           <div style="display:none;">
                            <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("nfs"); ?>">Register Now For NFS</a></p></center>
                            <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("mini-militia"); ?>">Register Now For Mini Militia</a></p></center>
                            <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("fifa"); ?>">Register Now For FIFA</a></p></center>
                        </div>
                  </div>
                <?php
      break;
      case 'tech-roadies': ?>
                  <!-- ==========================================for Tech-Roadies=================================== -->
                  <div id="tech-roadies">
                   <br>
                    <center><span class="letter" data-letter="T">T</span>
                    <span class="letter" data-letter="E">E</span>
                    <span class="letter" data-letter="C">C</span>
                    <span class="letter" data-letter="H">H</span>
                    <span class="letter" data-letter="-">-</span>
                    <span class="letter" data-letter="R">R</span>
                    <span class="letter" data-letter="O">O</span>
                    <span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="D">D</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="E">E</span>
                    <span class="letter" data-letter="S">S</span>
                    </center>
                    <br>
                    <blockquote>
                    <p id="para">
                        <b><u>ROUND -1:  Written</u></b><br><br>
                        • Half of the total strength of the students will be selected in this round.<br>
                        • Total 15 questions will be there in which 5 questions will be compulsory.<br><br>

                        <b><u>ROUND -2: Group Discussion & P.I Round</u></b><br><br>
                        • For group discussion on spot topic will be given.(TOPIC:-CURRENT ISSUES)<br>
                        • After group discussion round 2-2 students will go for P.I. round.<br>
                        • On the basis of :<br>
                        -PERSONALITY, ACTIVENESS, BOLDNESS ,SPEAKING SKILLS 10 students will be selected.<br><br>

                        <b><u>ROUND -3: Group Event</u></b><br><br>
                        • 5 groups will be formed consisting of 2 members in each groups.<br>
                        • Time limitation will be there.<br>
                        • If any indisciplinary activity will be found then that group will be disqualified.<br>
                        • Only 2 groups will be selected (4 members).<br>
                        • VENUE – KHO-KHO GROUND.<br><br>

                        <b><u>ROUND -4: Individual Event</u></b><br><br>
                        • Time based event.<br>
                        • VENUE -Basket Ball Ground.<br>
                        • In this round the winner will be selected.<br>

                  </p><br>
                  </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mr. RadhaNath Patra - 9778628981 </p>
                     <p id="para2"><b>Student Coordinator</b><br>
                           Prudhvi/Himanshu - 8456085933</p><br><br>
                          <center><p><a style="display:none;" class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("tech-roadies"); ?>" role="button">Register Now</a></p></center>
                  </div>
                <?php
      break;
      case 'dancing': ?>
                  <!-- ==========================================for Dancing=================================== -->
                  <div id="dancing">
                     <br>
                    <center><span class="letter" data-letter="D">D</span>
                    <span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="N">N</span>
                    <span class="letter" data-letter="C">C</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="N">N</span>
                    <span class="letter" data-letter="G">G</span>
                    </center>
                    <br>
                    <blockquote>
                    <p id="para"><b id="team">**The number of members allowed in a group should be within 4-5 members.</b><br><br>
                        -> The members in a team should comprise of only boys or only girls.<br>
                        -> The performance should be of 5-6 minutes.Same applies for solo performance too.<br><br>
                        <b>The theme should be something related to:-</b><br>
                        a) Tribute to Hollywood/bollywood legends.<br>
                        b) Something related to the theme of comedy.<br>
                        c) Contemporary/Freestyle/Hip-Hop/Robotics.<br><br>
                        <b>-> The participants should submit their track to their respective event co-ordinators  before 2-3 days prior to the event in order to avoid last minute rush.</b><br><br>
                        <b>-> The participants are allowed to be in their civil attire on what their song demands.</b><br><br>
                        <b>-> N.B:Their attire should be simple and sober without any vulgarity.</b><br>
                  </p><br>
                  </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mrs. Ashima Sindhu Mohanty - 8895338155<br/>
                            Mr. Srikant Pattnaik - 9438088235 </p>
                          <p id="para2"><b>Student Coordinator</b><br>
                           Mohit Kumar Mohanty - 8093392390</p><br><br>
                          <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("dancing"); ?>" style="display: none;">Register Now</a></p></center>
                  </div>
                <?php
      break;
      case 'poster-presentation': ?>
                  <!-- ==========================================for Poster-Presentaion=================================== -->
                  <div id="poster-presentation">
                    <br>
                    <center><span class="letter" data-letter="P">P</span>
                    <span class="letter" data-letter="O">O</span>
                    <span class="letter" data-letter="S">S</span>
                    <span class="letter" data-letter="T">T</span>
                    <span class="letter" data-letter="E">E</span>
                    <span class="letter" data-letter="R">R</span>
                    </center>
                    <br>
                    <BLOCKQUOTE>
                    <h3 style="color: #432fae;">Rules and regulations for Poster presentation :</h3>
                    <ol type="number">
                    <li>Interested participants should register their name in the website or can give their names offline as convenient to them.</li>
                    <li>Interested participants can participate individually or in group of 2.</li>
                    <li>The participants are required to submit their abstract before four or five days of the poster presentation</li>
                    <li>Participants would be shortlisted from there.</li>
                    <li>Participants are required to bring their presentation poster for the accepted paper.</li>
                    <li>The size of the poster will be informed to you after your paper will be accepted for   presentation</li>
                    <li>The Best Poster Award is under the judge and the organizers decision</li>
                    <li>Presenter should be in their formal attire during the presentation</li>
                    </ol>
                    </BLOCKQUOTE>
                    <p id="para2"><b>Faculty Coordinator</b><br/>
                           Mr. Subodh Panda - 9437326277</p>
                          <p id="para2"><b>Student Coordinator</b><br>
                           Navita Singh - 8984866619</p></p><br><br>
                          <center><p><a style="display:none;" class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("poster-presentation"); ?>" role="button">Register Now</a></p></center>
                  </div>
                <?php
      break;
      case 'paper-presentation': ?>
                  <!-- ==========================================for Paper-Presentaion================================== -->
                  <div id="paper-presentation">
                    <br>
                    <center><span class="letter" data-letter="P">P</span>
                    <span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="P">P</span>
                    <span class="letter" data-letter="E">E</span>
                    <span class="letter" data-letter="R">R</span>
                    </center>
                    <br>
                    <BLOCKQUOTE>
                    <h3 style="color: #432fae;">Rules and regulations for Paper presentation :</h3>
                    <ol type="number">
                      <li>Interested participants can participate individually or in a group of 2. </li>
                      <li>Interested participants should register their name in the website or can give their names offline, as convenient to them.</li>
                      <li>The participants are required to submit their abstract before four or five days of the paper presentation</li>
                      <li>Participants would be shortlisted from there.</li>
                      <li>The participants are required to bring their presentation slides for the accepted paper. The presentations slides should only be either in ppt or pptx format.</li>
                      <li>In the 10 minutes presentation time slot, 7 minutes would be provided for paper presentation and 3 minutes for Q&A session</li>
                      <li>During each paper presentation session, there will be two signals (ring sound) given by a timekee per. The first signal indicates there are only three minutes remaining for the presentation. The second signal indicates the end of the presentation and the participation</li>
                      <li>The Best Paper Award is under the judge and the organizers decision.</li>
                      <li>Presenter should be in their formal attire during the presentation.</li>
                    </ol>
                    </BLOCKQUOTE>
                    <p id="para2"><b>Faculty Coordinator</b><br/>
                           Mr. Premansu Rath. 8093909303</p>
                          <p id="para2"><b>Student Coordinator</b><br>
                           Navita Singh - 8984866619</p></p><br><br>
                          <center><p><a style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("paper-presentation"); ?>" role="button">Register Now</a></p></center>
                  </div>
                <?php
      break;
      case 'just-a-minute': ?>
                  <!-- ==========================================for Just-A-Minute=================================== -->
                  <div id="just-a-minute">
                   <br>
                    <center><span class="letter" data-letter="J">J</span>
                    <span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="M">M</span>
                    </center>
                    <br>
                    <blockquote>
                    <p id="para" style="font-size: 20px; text-align: justify;">Just-A-Minute is an all-round fun event that is all about the effort and hard work you put to perform well. Can you make through sixty seconds of non-stop performance or will the sheer pressure make you crumble and have your competitors pounce on you in an instant?</p>
                    <h3 style="color: #432fae;">The Rules:</h3>
                    <h4 style="color: #f0e;">Round-1(Elimination) :- </h4>
                    <ol type="number">
                      <li>There will be no spot registration.</li>
                      <li>This round is a written round where 10 questions will be given to the registered students and for each there will be one minute to answer.</li>
                      <li>Questions can be from Apti, GK, audio visual etc.</li>
                    </ol>
                    <h4 style="color: #f0e;">Round-2(Task) :- </h4>
                    <ol type="number">
                      <li>Qualified participants will be given a task which is to be completed in a minute.(Ex-Speech etc)</li>
                      <li>The best performers will be selected for the next round.</li>
                    </ol>
                    <h4 style="color: #f0e;">n)Round-3(Gaming) :- </h4>
                    <ol type="number">
                      <li>Different entertaining games will be there in this round.</li>
                      <li>For each game there will be one minute.</li>
                    </ol><br>
                    <p style="color: #788afe;; font-size: 25px; font-family: tahoma;">Top three will be selected as winners (1st, 2nd and 3rd)</p><br>
                    <p style="font-size: 20px; color: #f00;">The top performers will be selected for the second and third round. The number of participants selected for next rounds will be decided by the coordinators. Any changes in the rules can be informed on the spot according to the suitable situation.</p>
                    <p style="font-size: 20px; color: #f00;"><b><i><u>No questions or arguments once the final decision has been made by the JAM master.</u></i></b></p>
                  </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mr. Tusara Kanta Panda - 9040693050 </p>
                          <p id="para2"><b>Student Coordinator</b><br>
                           Abhishek Kumar - 8908692423</p><br><br>
                          <center><p><a style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("just-a-minute"); ?>" role="button">Register Now</a></p></center>
                  </div>
                <?php
      break;
      case 'nail-painting': ?>
                  <!-- ==========================================for 'Nail-Painting=================================== -->
                  <div id="nail-painting">
                   <br>
                    <center><span class="letter" data-letter="N">N</span>
                    <span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="L">L</span>
                    <span class="letter" data-letter="-">-</span>
                    <span class="letter" data-letter="P">P</span>
                    <span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="N">N</span>
                    <span class="letter" data-letter="T">T</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="N">N</span>
                    <span class="letter" data-letter="G">G</span>
                    </center>
                    <br>
                    <blockquote>
                    <p id="para"><b>Use of Colour :</b><br><br>
                        • The colours chosen should complement the design<br>
                        • The colours should represent the design and theme appropriately<br>
                        • The colours should flow throughout or graduate through all 10 nails.<br>
                        • The colours should complement and contrast at the same time. <br><br>

                        <b>Continuity of Theme :</b><br><br>
                        • The theme should be identifiable.<br>
                        • There must be a continuance of the theme from nail to nail. <br><br>

                        <b id="team"> **The participants will paint in their own nail, or else they can choose their own partners.</b> <br><br>

                        -> The duration of the event time must be 30 munities only.<br>
                        -> The candidates must bring your nail paint maximum 5 only .<br>
                        -> The event will held in electronics department.<br>
                        -> The set of the nails can be made with any type of artificial enhancements with the exception of cover tips.<br>
                        -> All types of nail art are allowed to create the design, but all embellishments must come from the nail industry. Jewellery or other accessories are not allowed. <br>
                        -> Pre-assembly of art is NOT allowed. <br>
                        -> All work must be created during the competition time. <br>
                        -> The theme of the artwork must represent the theme set by the Nailympics hosting the competition. The theme is different every year. <br>
                        -> The artwork must be identifiable by judges as being part of the theme <br>
                        -> There is no consideration in scoring for the shape/style of the nail. <br>
                        -> The nail may have any shape desired by the competitor <br>
                        -> The overall appearance of the nail being worked on will be scored, but there is no consideration in scoring for usual shapes.<br>
                        -> The product used to create the nail that will be worked on may have colour and/or glitter in the application if desired, but there will not be any consideration in scoring. <br>
                        -> No nail art or embellishments of any kind are allowed in the nail application other than colour/glitter. There will be no points given for any work done prior. <br>
                        -> The surface of the nail must be free of any and all products prior to the competition & will be checked by the floor judges. <br>
                        -> Scores are based on degree of difficulty, creativity, originality, quality of work & ability to represent the theme.  <br>
                   </p><br>
                   </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mrs. Subhashree S Biswal - 9090500203
                     <br>Ms. Priyambada Parida - 8093833738</p>
                     <p id="para2"><b>Student Coordinator</b><br>
                           Kalpana Panigrahi - 7205207773</p><br><br>
                          <center><p><a  style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("nail-painting"); ?>" role="button">Register Now</a></p></center>
                  </div>
                <?php
      break;
      case 'rangoli': ?>
                  <!-- ==========================================for Rangoli=================================== -->
                  <div id="rangoli">
                    <br>
                    <center><span class="letter" data-letter="R">R</span>
                    <span class="letter" data-letter="A">A</span>
                    <span class="letter" data-letter="N">N</span>
                    <span class="letter" data-letter="G">G</span>
                    <span class="letter" data-letter="O">O</span>
                    <span class="letter" data-letter="L">L</span>
                    <span class="letter" data-letter="I">I</span>
                    </center>
                    <br>
                    <blockquote>
                    <h3 style="color: #432fae; text-align: center;">RULES AND REGULATIONS FOR RANGOLI </h3>
                    <ol type="number">
                      <li>THE NUMBER OF PARTICIPANTS SHOULD BE 2 IN EACH TEAM. </li>
                      <li>THE AREA/SPACE PROVIDED FOR EACH TEAM WILL BE 3*4 ft.</li>
                      <li>THE DURATION OF THE EVENT IS 30 MINUTES.</li>
                      <li>PARTICIPANTS ARE ALLOWED TO BRING ANY KIND OF COLOUR BUT DONT BRING MODULE, STICKERS, COLOURS Etc.</li>
                      <li>REGISTRATION FEES WILL BE 10rs FOR EACH TEAM.</li>
                      <li>THE JUDGING CRITERIA WOULD BE CREATIVITY AND NEATNESS.</li>
                    </ol>
                  </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mr. SUBHASHREE BISWAL  - 9090500203 </p>
                          <p id="para2"><b>Student Coordinator</b><br>
                           KALPANA PANIGRAHI - 7205207773</p><br><br>
                         <center><p><a style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("rangoli"); ?>" role="button">Register Now</a></p></center>
                  </div>
                <?php
      break;
      case 'singing': ?>
                  <!-- ==========================================for Singing=================================== -->
                  <div id="singing">
                 <br>
                    <center><span class="letter" data-letter="S">S</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="N">N</span>
                    <span class="letter" data-letter="G">G</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="N">N</span>
                    <span class="letter" data-letter="G">G</span>
                    </center>
                    <br>
                    <blockquote>
                    <p id="para"><b id="team">**The singing performane should be either solo/duet.(BOY&BOY OR GIRL&GIRL)</b><br><br>
                        ->The participants should perform with the help of Karaoke.<br>
                        ->You can take the assistance of a guitarist.<br>
                        ->No band performance is allowed.<br>
                        ->The song can be of any language without any vulgarity.<br>
                        -> The participants should submit their track to the respective event co-ordinators before 2-3 days prior to the event in order to avoid last minute rush.<br>
                  </p><br>
                  </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mrs. Rashmita Gouda - 9438088235<br/>Mr. Srikant Pattnaik - 9438088235 </p>
                          <p id="para2"><b>Student Coordinator</b><br>
                 Mohit Kumar Mohanty - 8093392390</p><br><br>
                          <center><p><a class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("singing"); ?>" style="display: none;" >Register Now</a></p></center>
                  </div>
                <?php
      break;
      case 'robotics': ?>
                  <!-- ==========================================for Robotics=================================== -->
                  <div id="robotics">
                    <br>
                    <center><span class="letter" data-letter="R">R</span>
                    <span class="letter" data-letter="O">O</span>
                    <span class="letter" data-letter="B">B</span>
                    <span class="letter" data-letter="O">O</span>
                    <span class="letter" data-letter="T">T</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="C">C</span>
                    <span class="letter" data-letter="S">S</span>
                    </center>
                    <br>
                    <blockquote>
                    <h1 style="color: #f0e; text-align: center;"><b>Line Follower Rules</b></h1><br>
                    <h3 style="color: #5e7; text-align: center;"><b>OBJECTIVE</b></h3>
                    <ul type="none">
                      <li> Robotics events are incomplete without a line follower competition. A simple black line on a white background and your robot must follow it. Easy, right? Here’s the catch. The track is filled with bends and curves. Nothing comes easy, right?
                      The task is to build an autonomous robot which is capable of traversing a black line on a white background. The track has bends, curves, T-joints and breaks.
                      </li>
                    </ul>
                    <h3 style="color: #5e7; text-align: center;"><b>GENERAL RULES</b></h3>
                    <ol type="number">
                      <li>A team may consist of a maximum of 4 members. Students from different department can form a team.</li>
                      <li>Teams are not allowed to replace parts between runs. They are, however,allowed to replace defective sensors, but with a penalty added to it</li>
                      <li>Change of batteries and modifications to the code are allowed but the game play has to be restarted. </li>
                      <li>If the robot is manually touched except at the start, then it will be considered as a violation and will lead to penalty. </li>
                    </ol>
                    <h3 style="color: #5e7; text-align: center;"><b>EVENT RULE</b></h3>
                    <ol type="number">
                      <li>The line to be traced (black line) is of 20mm in width</li>
                      <li>If the bot diverts from the black line then each time the bot is kept on track it will cost a penalty.</li>
                      <li>The bots will be cost a penalty if it does not start tracing the line within 10 seconds after deviating from the path</li>
                      <li>Judge's decision will be final and any further arguments with the judges will be penalized</li>
                      <li>Teams will be sorted according to their performance.</li>
                      <li>Winners will be selected by the judges and will be awarded.</li>
                    </ol>
                    <h3 style="color: #5e7; text-align: center;"><b>BOT SPECIFICATION</b></h3>
                    <ol type="number">
                      <li>The maximum dimensions of the base of the bot should be 25cm x 25cm x 25cm</li>
                      <li>Robots must not use ready-made mechanisms, Lego kits, etc. However, ready-made sensors and microcontroller kits can be used.</li>
                    </ol>
                    <h1 style="color: #f0e; text-align: center;"><b>Task Master Rules</b></h1>
                    <ol type="number">
                      <li>Team will consist of 4 member max and student from different department can form a team.</li>
                      <li>The size of the arena will be of 6x6 feet.</li>
                      <li>All teams have to complete the task within specified time limit</li>
                      <li>The arena will be divided into different level, for completion of each level 40 points will be given</li>
                      <li>If the participant will touch their bot for restarting the level then 5 points will be deducted.</li>
                      <li>If the bot will touch the wall/ boundary/ obstacle of arena then 2 points will be deducted.</li>
                      <li>If the team wants to skip the level then 10 points will be deduce for each skip.</li>
                      <li>The team who will finish the arena within shortest period of time and with highest points will be the winner.</li>
                    </ol>
                  </blockquote>
                     <p id="para2"><b>Faculty Coordinator</b><br/>
                            Mr. Sukanta Tulo - 9438764654</p>
                          <p id="para2"><b>Student Coordinator</b><br>
                           Roshan Kr Routh - 7077158158<br>Siddhanth Sethi - 7077980156</p><br><br>
                          <center><p><a style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("line-follower"); ?>" role="button">Register For Line Follower</a></p></center>
                          <center><p><a style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("task-master"); ?>" role="button">Register For Task Master</a></p></center>
                  </div>
                <?php
      break;
      case 'groupie': ?>
                  <!-- ==========================================for Robotics=================================== -->
                  <div id="groupie">
                    <br>
                    <center><span class="letter" data-letter="G">G</span>
                    <span class="letter" data-letter="R">R</span>
                    <span class="letter" data-letter="O">O</span>
                    <span class="letter" data-letter="U">U</span>
                    <span class="letter" data-letter="P">P</span>
                    <span class="letter" data-letter="I">I</span>
                    <span class="letter" data-letter="E">E</span>
                    </center>
                    <br>
                    <blockquote>
                    <p style="color: #000;">This is an event where only four members can take part in a group. Participants needs to take a group photo and on the basis of the photo, your vision, creativity and ingenuity skills the winner will be awarded on the basis of decision taken by the panel of judges.</p>
                    <h3 style="color: #432fae;">RULES AND REGULATION </h3>
                    <ol type="number">
                      <li>Only 4 Members In A Group Are Allowed To Participate In This Event.</li>
                      <li>One Participant Can Take A Photo With Only One Group. If He/She Is Found In Two Groups Then Both The Groups Will Be Disqualified.</li>
                      <li>Only The Phone’s Front Camera Will Be Used. </li>
                      <li>No Dslr, Slr Or Any App Should Be Used For The Photos.</li>
                      <li>No Editing Should Be Done In The Photo. </li>
                      <li>The Group Photo That Is Taken Within The Campus Will Only Be Considerd.</li>
                      <li>The Photo Should Convey Some Social Message This Is To Check The Innovative And Imaginative Skills Of The Participants. (Eg- Some Sign Or Some Background Or Any Symbol, Etc.)</li>
                      <li>The Photos Which Strictly Satisfies The Above Rules And Regulation Under The Decision Taken By The Panel Of Judges Will Be Awarded As The Winner.</li>
                      <li>The Participants Have To Send The Photo In The Mail Id <a href="mailto:Knt.Groupie510@Gmail.Com">Knt.Groupie510@Gmail.Com</a></li>
                      <li>Any Query Regarding The Event Contact The Undersigned Coordinators.</li>
                    </ol>
                  </blockquote>
                          <p id="para2"><b>Student Coordinator</b><br>
                           HIMANSHU BISWAS  - 8420863414 <br>
                            PILLA PRUDHVI  - 8456085933</p><br>
                            <center><p><a style="display:none;"  class="btn btn-primary" id="button" href="eventsignup.php?event=<?php echo base64_encode("groupie"); ?>" role="button">Register Now</a></p></center>
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
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
