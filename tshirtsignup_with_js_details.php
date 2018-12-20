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
    <title>Tshirt-Registration | GietKaryaneeti.in | ECE | AEI | GIET,Gunupur</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter.css" rel="stylesheet">
    <!-- Custom styles for footer area -->
    <link rel="stylesheet" href="css/footer.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="js/ie-emulation-modes-warning.js"></script>
     <script type="text/javascript">
      function validate()
      {
        back=true;
        //testing Area
       validate_first_name=first_name_test();
       validate_middle_name=middle_name_test();
       validate_last_name=last_name_test();
       validate_mobile=mobile_test();
       validate_email=email_test();
       validate_gender=gender_test();
       validate_branch=branch_test();
       validate_section=section_test();
       validate_year=year_test();
       validate_color=color_test();
       validate_size=size_test();
        //return false;
       if(!((validate_email)&&(validate_gender)&&(validate_size)&&(validate_branch)&&(validate_section)&&(validate_year)&&(validate_color)&&(validate_mobile)&&(validate_first_name)&&(validate_middle_name)&&(validate_last_name)))
       {
        back=false;
       }
       return back;
      }
      //function Zone---------------------------=================--------------------
            //for first_name
      function first_name_test()
      {
        back_first_name=true;
        //preparing pattern
        var first_name_pattern=/^[a-zA-Z]{1,50}$/;
        //Preparing Data INPUT
        var first_name=document.getElementById('first_name');
        //preparing Data Output (error)
        var first_name_error=document.getElementById('first_name_error');
        //Gatting Data
        var fnData=first_name.value;
          if(fnData=="")
          {
            back_first_name=false;
            first_name_error.innerHTML="First Name Is required";
            first_name.style.border="2px solid red"
            first_name_error.style="color:red";
          }
          else if(first_name_pattern.test(fnData))
            {
              first_name.style.border="";
              first_name_error.innerHTML="Verified";
              first_name_error.style="color:green";
            }
            else
            {
              first_name_email=false;
              first_name_error.innerHTML="Invalid First Name"
              first_name.style.border="2px solid red"
              first_name_error.style="color:red";
            }
        return back_first_name;
      }
            //for middle_name
      function middle_name_test()
      {
        back_middle_name=true;
        //preparing pattern
        var middle_name_pattern=/^[a-zA-Z]{1,30}$/;
        //Preparing Data INPUT
        var middle_name=document.getElementById('middle_name');
        //preparing Data Output (error)
        var middle_name_error=document.getElementById('middle_name_error');
        //Gatting Data
        var mnData=middle_name.value;
          if(mnData=="")
          {
            back_middle_name=true;
            middle_name_error.innerHTML="";
            middle_name.style.border="";
          }
          else if(middle_name_pattern.test(mnData))
            {
              middle_name.style.border="";
              middle_name_error.innerHTML="Verified";
              middle_name_error.style="color:green";
            }
            else
            {
              middle_name_email=false;
              middle_name_error.innerHTML="Invalid Middle Name"
              middle_name.style.border="2px solid red"
              middle_name_error.style="color:red";
            }
        return back_middle_name;
      }
      //for last_name
      function last_name_test()
      {
        back_last_name=true;
        //preparing pattern
        var last_name_pattern=/^[a-zA-Z]{1,50}$/;
        //Preparing Data INPUT
        var last_name=document.getElementById('last_name');
        //preparing Data Output (error)
        var last_name_error=document.getElementById('last_name_error');
        //Gatting Data
        var lnData=last_name.value;
          if(lnData=="")
          {
            back_last_name=false;
            last_name_error.innerHTML="Last Name Is required";
            last_name.style.border="2px solid red"
            last_name_error.style="color:red";
          }
          else if(last_name_pattern.test(lnData))
            {
              last_name.style.border="";
              last_name_error.innerHTML="Verified";
              last_name_error.style="color:green";
            }
            else
            {
              last_name_email=false;
              last_name_error.innerHTML="Invalid Last Name"
              last_name.style.border="2px solid red"
              last_name_error.style="color:red";
            }
        return back_last_name;
      }
      //for Mobile Number
      function mobile_test()
      {
        back_mobile=true;
        //preparing pattern
        mobile_pattern=/^\d{10}$/;
        //Preparing Data INPUT
        var mobile=document.getElementById('mobile');
        //preparing Data Output (error)
        var mobile_error=document.getElementById('mobile_error');
        //Gatting Data
        var mData=mobile.value;
          if(mData=="")
          {
            back_mobile=false;
            mobile_error.innerHTML="Mobile Is required";
            mobile.style.border="2px solid red"
            mobile_error.style="color:red";
          }
          else if(mobile_pattern.test(mData))
            {
              mobile.style.border="";
              mobile_error.innerHTML="Verified";
              mobile_error.style="color:green";
            }
            else
            {
              mobile_email=false;
              mobile_error.innerHTML="Invalid Mobile"
              mobile.style.border="2px solid red"
              mobile_error.style="color:red";
            }
        return back_mobile;
      }
      //--------------------------for email----------------------
      function email_test()
        {
          back_email=true;
          //preparing pattern
          email_pattern=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-z]{2,4}$/;
          //Preparing Data INPUT
          var email=document.getElementById('email');
          //preparing Data Output (error)
          var email_error=document.getElementById('email_error');
          //Gatting Data
          var eData=email.value;
          if(eData=="")
          {
            back_email=false;
            email_error.innerHTML="Email Is required";
            email.style.border="2px solid red"
            email_error.style="color:red";
          }
          else if(email_pattern.test(eData))
            {
              email.style.border="";
              email_error.innerHTML="Verified";
              email_error.style="color:green";
            }
            else
            {
              back_email=false;
              email_error.innerHTML="Invalid Email"
              email.style.border="2px solid red"
              email_error.style="color:red";
            }
          return back_email;
        }
      //for gender
      function gender_test()
      {
        back_gender=true;
       //Preparing Data INPUT
        var gender=document.getElementById('gender');
        //preparing Data Output (error)
        var gender_error=document.getElementById('gender_error');
        //Gatting Data
        genderData=gender.value;
        if(genderData=="WRONG")
        {
          back_gender=false;
          gender.style.border="2px solid red";
          gender_error.innerHTML="Gender Is required";
          gender_error.style="color:red";
        }
        else
        {
          gender.style.border="";
          gender_error.innerHTML="Verified";
          gender_error.style="color:green";
        }
        return back_gender;
      }
      //for branch
      function branch_test()
      {
        back_branch=true;
       //Preparing Data INPUT
        var branch=document.getElementById('branch');
        //preparing Data Output (error)
        var branch_error=document.getElementById('branch_error');
        //Gatting Data
        sData=branch.value;
        if(sData=="WRONG")
        {
          back_branch=false;
          branch.style.border="2px solid red";
          branch_error.innerHTML="Branch Is required";
          branch_error.style="color:red";
        }
        else
        {
          branch.style.border="";
          branch_error.innerHTML="Verified";
          branch_error.style="color:green";
        }
        return back_branch;
      }
      //for section
      function section_test()
      {
        back_section=true;
       //Preparing Data INPUT
        var section=document.getElementById('section');
        //preparing Data Output (error)
        var section_error=document.getElementById('section_error');
        //Gatting Data
        sectionData=section.value;
        if(sectionData=="WRONG")
        {
          back_section=false;
          section.style.border="2px solid red";
          section_error.innerHTML="Section Is required";
          section_error.style="color:red";
        }
        else
        {
          section.style.border="";
          section_error.innerHTML="Verified";
          section_error.style="color:green";
        }
        return back_section;
      }
      //for year
      function year_test()
      {
        back_year=true;
       //Preparing Data INPUT
        var year=document.getElementById('year');
        //preparing Data Output (error)
        var year_error=document.getElementById('year_error');
        //Gatting Data
        yearData=year.value;
        if(yearData=="WRONG")
        {
          back_year=false;
          year.style.border="2px solid red";
          year_error.innerHTML="Year Is required";
          year_error.style="color:red";
        }
        else
        {
          year.style.border="";
          year_error.innerHTML="Verified";
          year_error.style="color:green";
        }
        return back_year;
      }
      //for color
      function color_test()
      {
        back_color=true;
       //Preparing Data INPUT
        var color=document.getElementById('color');
        //preparing Data Output (error)
        var color_error=document.getElementById('color_error');
        //Gatting Data
        colorData=color.value;
        if(colorData=="WRONG")
        {
          back_color=false;
          color.style.border="2px solid red";
          color_error.innerHTML="Colour Is required";
          color_error.style="color:red";
        }
        else
        {
          color.style.border="";
          color_error.innerHTML="Verified";
          color_error.style="color:green";
        }
        return back_color;
      }
      //for size
      function size_test()
      {
        back_size=true;
       //Preparing Data INPUT
        var size=document.getElementById('size');
        //preparing Data Output (error)
        var size_error=document.getElementById('size_error');
        //Gatting Data
        sData=size.value;
        if(sData=="WRONG")
        {
          back_size=false;
          size.style.border="2px solid red";
          size_error.innerHTML="Size Is required";
          size_error.style="color:red";
        }
        else
        {
          size.style.border="";
          size_error.innerHTML="Verified";
          size_error.style="color:green";
        }
        return back_size;
      }
    </script>
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
              <li><a href="tshirt.php">T-Shirt</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="signin.php">Office</a></li>
              <li class="active"><a href="tshirtsignup.php">T-Shirt Registration</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </header>
    <section>
      <div class="container">
        <div>
          <form class="form-signin" method="POST" onsubmit="return validate()" novalidate>
            <label for="roll_no" class="sr-only">Roll No.</label>
            <input type="text" id="roll_no" name="roll_no" class="form-control" placeholder="Roll No" autofocus autocomplete onchange="roll_no()" onkeyup="roll_no_test()"><span id="roll_no_error"></span><br>
            <label for="first_name" class="sr-only">First Name</label>
            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" autocomplete onchange="first_name_test()" onkeyup="first_name_test()"><span id="first_name_error"></span><br>
            <label for="middle_name" class="sr-only">Middle Name</label>
            <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle Name (OPTIONAL)" onchange="middle_name_test()" onkeyup="middle_name_test()"><span id="middle_name_error"></span><br>
            <label for="last_name" class="sr-only">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" autocomplete onchange="last_name_test()" onkeyup="last_name_test()"><span id="last_name_error"></span><br>
            <label for="mobile" class="sr-only">mobile</label>
            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile" autocomplete onchange="mobile_test()" onkeyup="mobile_test()"><span id="mobile_error"></span><br>
            <label for="email" class="sr-only">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" autocomplete onchange="email_test()" onkeyup="email_test()"><span id="email_error"></span><br>
            <label for="branch" class="sr-only">Branch</label>
            <select id="gender" name="gender" class="form-control" onblur="gender_test()"  onchange="gender_test()" onclick="gender_test()">
                <option value="WRONG">SELECT GENDER</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
            </select>
            <span id="gender_error"></span><br>
            <label for="branch" class="sr-only">Branch</label>
            <select id="branch" name="branch" class="form-control" onblur="branch_test()"  onchange="branch_test()" onclick="branch_test()">
                <option value="WRONG">SELECT BRANCH</option>
                <option value="ece">ECE</option>
                <option value="aei">AEI</option>
                <option value="me">ME</option>
                <option value="cse">CSE</option>
                <option value="ee">EE</option>
                <option value="eee">EEE</option>
                <option value="bt">BT</option>
                <option value="cv">CV</option>
                <option value="che">CHE</option>
            </select>
           <span id="branch_error"></span><br>
             <label for="sec" class="sr-only">Section</label>
             <select id="section" name="section" class="form-control" onblur="section_test()"  onchange="section_test()" onclick="section_test()">
                 <option value="WRONG">SELECT SECTION</option>
                 <option value="A">A</option>
                 <option value="B">B</option>
                 <option value="C">C</option>
             </select>
            <span id="section_error"></span><br>
            <label for="year" class="sr-only">Year</label>
            <select id="year" name="year" class="form-control" onblur="year_test()" onchange="year_test()" onclick="year_test()">
                 <option value="WRONG">SELECT YEAR</option>
                 <option value="2nd">2ND</option>
                 <option value="3rd">3RD</option>
                 <option value="4th">4TH</option>
            </select>
           <span id="year_error"></span><br>
            <label for="color" class="sr-only">Colour</label>
            <select id="color" name="color" class="form-control" onblur="color_test()"  onchange="color_test()" onclick="color_test()">
                <option value="WRONG">SELECT COLOUR</option>
                <option value="black">BLACK</option>
                <option value="white">WHITE</option>
            </select>
           <span id="color_error"></span><br>
            <label for="size" class="sr-only">Size</label>
            <select id="size" name="size" class="form-control" onblur="size_test()" onchange="size_test()" onclick="size_test()">
                 <option value="WRONG">SELECT SIZE</option>
                 <option value="S">S</option>
                 <option value="M">M</option>
                 <option value="L">L</option>
                 <option value="XL">XL</option>
                 <option value="XXL">XXL</option>
             </select>
            <span id="size_error"></span><br>
           <br>
            <input type="submit" name="register" value="Register" class="btn btn-lg btn-primary btn-block">
          </form>
        </div>
      </div> <!-- /container -->
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
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
  extract($_REQUEST);
  if (isset($register)&&!empty($register))
  {
    include("connect_offline.php");
    mysql_connect($hostname,$username,$pwd);
    mysql_select_db($db);
    //chcking existance
    $select="SELECT roll_no FROM t_shirt WHERE roll_no='".$roll_no."'";
    $res=mysql_query($select);
    $count=mysql_num_rows($res);
    if ($count)
    {
      ?>
      <script type="text/javascript">
        alert("Alredy Registerd");
      </script>
      <?php
    }
    else
    {
      //formating data
      $roll_no=format_set($roll_no);
      $first_name=format_set($first_name);
      $middle_name=format_set($middle_name);
      $last_name=format_set($last_name);
      $branch==format_set($branch);
      $section=format_set($section);
      $year=format_set($year);
      $email=format_set($email);
      $mobile=format_set($mobile);
      $gender=format_set($gender);
      $color=format_set($color);
      $size=format_set($size);
      //preparing insert query
     $insert="INSERT INTO t_shirt(roll_no,first_name,middle_name,last_name,branch,section,year,mobile,email_id,gender,color,size) VALUES('$roll_no','$first_name','$middle_name','$last_name','$branch','$section','$year','$mobile','$email','$gender','$color','$size')";
      $chk=mysql_query($insert);
      if ($chk)
      {
        ?>
        <script type="text/javascript">
          alert("Successfully Registerd");
          window.location="tshirtsignup.php";
        </script>
        <?php
      }
      else
      {
        ?>
        <script type="text/javascript">
          alert("Something Wrong");
        </script>
        <?php
      }
    }
  }
  /*---------------------------------User Define Function Area-------------------------------------------------------*/
Function format_set($str)
{
    return(trim(strtolower(strip_tags($str))));
}
?>
