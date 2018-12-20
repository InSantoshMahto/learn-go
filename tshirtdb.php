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
	<title>Tshirt-Office | GietKaryaneeti.in | ECE | AEI | GIET,Gunupur</title>
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
    	*{
    		margin: 0px;
    		padding: 0px;
    	}
    	thead,tfoot
    	{
    		background-color: #ffccff;
    	}
    	th,td
    	{
    		text-align: center;
    	}
    	.txtRoll[type=text],.txtRoll
    	{
    		width: 100px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtName[type=text],.txtName
    	{
    		width: 200px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtBranch[type=text],.txtBranch
    	{
    		width: 80px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtSection[type=text],.txtSection
    	{
    		width: 50px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtYear[type=text],.txtYear
    	{
    		width: 50px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtEmail[type=email],.txtEmail
    	{
    		width: 200px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtMobile[type=test],.txtMobile
    	{
    		width: 150px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtGender[type=text],.txtGender
    	{
    		width: 75px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtColor[type=text],.txtColor
    	{
    		width: 75px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtSize[type=text],.txtSize
    	{
    		width: 50px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtStatus[type=button],.txtStatus
    	{
    		width: 75px;
    		height: 35px;
    		font-size: 15px;
    		text-align: center;
    	}
    	.txtUpdate[type=button],.txtUpdate
    	{
    		width: 75px;
    		height: 35px;
    		font-size: 13px;
    		text-align: center;
    	}
    </style>
    <script type="text/javascript">
    function payment(no,id)
    {
    	payBack=false;
    	chk=prompt("Please Re-Enter Roll Number","Enter Here");
    	if (chk==no)
    	{
    		window.location="tshirtdb.php?stv=hkjglgjlAHGJGHH&7898792vnkb6ytqi2rcydny45&jfgh=577hbhb&r_no="+no+"&r_id="+id+"&gjkkHKhgLKJGhlksnghjhhgfag3242456656@$%GYF$Gvbjkkhnjnjjmjhlsnhvfalsd&payment=paynow";
    	}
    	else
    	{
    		alert("You Have Enter Wrong Roll No.\nPlease Try Again");
    	}
    }
 // update functio
    function dbUpdate(id,hint)
    {
    	if (hint=='all')
    	{
    		// for all-----------------
    		rollId="roll"+id;
	    	nameId="name"+id;
	    	branchId="branch"+id;
	    	sectionId="section"+id;
	    	yearId="year"+id;
	    	emailId="email"+id;
	    	mobileId="mobile"+id;
	    	genderId="gender"+id;
	    	colorId="color"+id;
	    	sizeId="size"+id;
	    	roll=document.getElementById(rollId);
	    	name=document.getElementById(nameId);
	    	branch=document.getElementById(branchId);
	    	section=document.getElementById(sectionId);
	    	year=document.getElementById(yearId);
	    	email=document.getElementById(emailId);
	    	mobile=document.getElementById(mobileId);
	    	gender=document.getElementById(genderId);
	    	color=document.getElementById(colorId);
	    	size=document.getElementById(sizeId);
	    	chkBranch=branch.readOnly;
	    	chkSection=section.readOnly;
	    	chkYear=year.readOnly;
	    	chkEmail=email.readOnly;
	    	chkMobile=mobile.readOnly;
	    	chkGender=gender.readOnly;
	    	chkColor=color.readOnly;
	    	chkSize=size.readOnly;
	    	if (chkBranch&&chkSection&&chkYear&&chkEmail&&chkMobile&&chkGender&&chkColor&&chkSize)
	    	{
	    		branch.readOnly=false;
	    		section.readOnly=false;
	    		year.readOnly=false;
	    		email.readOnly=false;
	    		mobile.readOnly=false;
	    		gender.readOnly=false;
	    		color.readOnly=false;
	    		size.readOnly=false;
	    		branch.style.backgroundColor = "#eeffff";
	    		section.style.backgroundColor = "#eeffff";
	    		year.style.backgroundColor = "#eeffff";
	    		email.style.backgroundColor = "#eeffff";
	    		mobile.style.backgroundColor = "#eeffff";
	    		gender.style.backgroundColor = "#eeffff";
	    		color.style.backgroundColor = "#eeffff";
	    		size.style.backgroundColor = "#eeffff";
	    		return false;
	    	}
	    	else
	    	{
	    		chkUpdate=confirm("Confirm Your Updata");
	    		if (chkUpdate)
	    		{
	    			return true;
	    		}
	    		else
	    		{
	    			branch.readOnly=false;
		    		section.readOnly=false;
		    		year.readOnly=false;
		    		email.readOnly=false;
		    		mobile.readOnly=false;
		    		gender.readOnly=false;
		    		color.readOnly=false;
		    		size.readOnly=false;
		    		branch.style.backgroundColor = "#ffffff";
		    		section.style.backgroundColor = "#ffffff";
		    		year.style.backgroundColor = "#ffffff";
		    		email.style.backgroundColor = "#ffffff";
		    		mobile.style.backgroundColor = "#ffffff";
		    		gender.style.backgroundColor = "#ffffff";
		    		color.style.backgroundColor = "#ffffff";
		    		size.style.backgroundColor = "#ffffff";
		    		return false;
	    		}
	    	}
    	}
    	else
    	{
    		// for custom -----------------------------
    		rollId="roll"+id;
	    	nameId="name"+id;
	    	colorId="color"+id;
	    	sizeId="size"+id;
	    	roll=document.getElementById(rollId);
	    	name=document.getElementById(nameId);
	    	color=document.getElementById(colorId);
	    	size=document.getElementById(sizeId);
	    	chkColor=color.readOnly;
	    	chkSize=size.readOnly;
	    	if (chkColor&&chkSize)
	    	{
	    		color.readOnly=false;
	    		size.readOnly=false;
	    		color.style.backgroundColor = "#eeffff";
	    		size.style.backgroundColor = "#eeffff";
	    		return false;
	    	}
	    	else
	    	{
	    		chkUpdate=confirm("Confirm Your Updata");
	    		if (chkUpdate)
	    		{
	    			return true;
	    		}
	    		else
	    		{
		    		color.readOnly=false;
		    		size.readOnly=false;
		    		color.style.backgroundColor = "#ffffff";
		    		size.style.backgroundColor = "#ffffff";
		    		return false;
	    		}
	    	}
    	}
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
	            <li><a href="http://gietkaryaneeti.in">Home</a></li>
	            <li><a href="event.php">Event</a></li>
	            <li><a href="registration.php">Registration</a></li>
            	<li><a href="gallery.php">Gallery</a></li>
	            <li><a href="about.php">About</a></li>
	            <li><a href="contact.php">Contact</a></li>
	            <li class="active"><a href="#">View Tshirt DB</a></li>
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
	<?php
		if (!(($header_user_id==1)&&($header_name=="santosh")&&($header_email=="onsihero@gmail.com")))
		{
			//other area
			//tshirtviewoffice();  //not visible to other
			search_details();
		}
		else
		{
			//---------------------santosh area-------------------------------
			search_details();
			tshirtviewoffice();//total detail
		}
	}
   	else
    {
    	header("Location: signin.php");
 	}
?>
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
//---------------function Area start----------------------- ------------------
	extract($_REQUEST);
	//Updata Area for All -------------------------------start-----------------------
		if (isset($allUpdate)&&!(empty($allUpdate)))
		    	{
		    		//preparing Variabe
		    			$roll_no="'$roll_no'";
		    			$branch="'$branch'";
		    			$section="'$section'";
		    			$year="'$year'";
		    			$email="'$email'";
		    			$mobile="'$mobile'";
		    			$gender="'$gender'";
		    			$color="'$color'";
		    			$size="'$size'";
		    			//perparing Update Query
		    			$update=" UPDATE t_shirt SET branch=$branch,section=$section,year=$year,email_id=$email,mobile=$mobile,gender=$gender,color=$color,size=$size WHERE roll_no=$roll_no";
		    			$test=mysql_query($update);
		    			if ($test)
		    			{
		    				?>
		    				<script type="text/javascript">
		    					window.location="tshirtdb.php";
		    				</script>
		    				<?php
		    			}
		    			else
		    			{
		    				echo "something wrong";
		    			}
		    	}
//------------Updata  Area for all -------------------------------END-----------------------
	//Updata Area for custom -------------------------------start-----------------------
		if (isset($customUpdate)&&!(empty($customUpdate)))
		    	{
		    		//preparing Variabe
		    		$roll_no=strtolower($roll_no);
		   			$roll_no="'$roll_no'";
		   			$color=strtolower($color);
		   			$color="'$color'";
		   			$size=strtolower($size);
	    			$size="'$size'";
	    			//perparing Update Query
		    		$update="UPDATE t_shirt SET color=$color,size=$size WHERE roll_no=$roll_no";
		    		echo "$update";
		    		$test=mysql_query($update);
		   			if ($test)
		   			{
		   				?>
		   				<script type="text/javascript">
	    					window.location="tshirtdb.php";
	    				</script>
		    			<?php
		    		}
		   			else
		   			{
		   				echo "something wrong";
		   			}
	    	}
//------------Updata  Area for custom -------------------------------END-----------------------
	//payment Area----------------------------start---------------------
		    	if (isset($payment)&&(!empty($payment))&&isset($r_no)&&(!empty($r_no))&&isset($r_id)&&(!empty($r_id)))
		    	{
		    		$r_no="'".$r_no."'";
		    		$r_id="'".$r_id."'";
		    		$accept="'".$header_name."'";
		    		$date="'".date('d-m-Y')."'";
		    		//preparing update Query
		    		$update="UPDATE t_shirt SET status='paid' , accept=$accept , date=$date WHERE roll_no=$r_no AND user_id=$r_id";
		    		$chk_update=mysql_query($update);
		    		if ($chk_update)
		    		{
		    			?>
		    			<script type="text/javascript">
		    				alert("Payment Successfull");
		    				window.location="tshirtdb.php";
		    			</script>
		    			<?php
		    		}
		    	}
		//payment Area----------------------------start---------------------
//------------------------------- tshirt View office start-------------------------------------------------------------------
    function tshirtviewoffice()
    {
    	?>
			<h1 align="center" style="background-color: #ee2146;color: #ffffff;">View Tshirt DB</h1>
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
		    		$select="SELECT * FROM t_shirt ORDER BY roll_no";
		    		$res=mysql_query($select);
		    		$count=mysql_num_rows($res);
		    		if ($count>0)
		    		{
		    			?>
		    			<div>
		    				<table width="100%" rules="all">
		    					<thead>
		    						<tr>
		    							<th>Sl No</th>
		    							<th>Roll No</th>
		    							<th>Name</th>
		    							<th>Branch</th>
		    							<th>Section</th>
		    							<th>Year</th>
		    							<th>Email</th>
		    							<th>Mobile</th>
		    							<th>Gender</th>
		    							<th>Color</th>
		    							<th>Size</th>
		    							<th colspan="3">Action</th>
		    							<th>Status</th>
		    						</tr>
		    					</thead>
		    			<?php
		    			$i=1;
		    			//looping
		    			while ($row=mysql_fetch_assoc($res))
		    			{
		    				if ($row['accept']=="")
		    				{
		    					$Modified_accept="---";
		    				}
		    				else
		    				{
		    					$Modified_accept=$row['accept'];
		    				}
		    				?>
		    					<tbody>
		    						<tr>
		    							<td><?php echo $i; ?></td>
		    							<form method="POST" action="" onsubmit="return dbUpdate(<?php echo $row['user_id']; ?>,'all')">
			    							<td class="txtRoll"><input type="text" name="roll_no" id="roll<?php echo $row['user_id']; ?>" class="txtRoll" value="<?php echo $row['roll_no']; ?>" readonly></td>
			    							<td class="txtName"><input type="text" name="name" id="name<?php echo $row['user_id']; ?>" class="txtName" value="<?php echo $row['first_name']." ".$row['last_name']; ?>" readonly ></td>
			    							<td class="txtBranch"><input type="text" name="branch" id="branch<?php echo $row['user_id']; ?>" class="txtBranch" value="<?php echo $row['branch']; ?>" readonly ></td>
			    							<td class="txtSection"><input type="text" name="section" id="section<?php echo $row['user_id']; ?>" class="txtSection" value="<?php echo $row['section']; ?>" readonly ></td>
			    							<td class="txtYear"><input type="text" name="year" id="year<?php echo $row['user_id']; ?>" class="txtYear" value="<?php echo $row['year']; ?>" readonly ></td>
			    							<td class="txtEmail"><input type="email" name="email" id="email<?php echo $row['user_id']; ?>" class="txtEmail" value="<?php echo $row['email_id']; ?>" readonly></td>
			    							<td class="txtMobile"><input type="text" name="mobile" id="mobile<?php echo $row['user_id']; ?>" class="txtMobile" value="<?php echo $row['mobile']; ?>" readonly></td>
			    							<td class="txtGender"><input type="text" name="gender" id="gender<?php echo $row['user_id']; ?>" class="txtGender" value="<?php echo $row['gender']; ?>" readonly ></td>
			    							<td class="txtColor"><input type="text" name="color" id="color<?php echo $row['user_id']; ?>" class="txtColor" value="<?php echo $row['color']; ?>" readonly ></td>
			    							<td class="txtSize"><input type="text" name="size" id="size<?php echo $row['user_id']; ?>" class="txtSize" value="<?php echo $row['size']; ?>" readonly ></td>
			    					<?php
			    					if ($row['status']=="paid")
			    					{
			    						?>
			    						<td class="txtUpdate"><input type="button" name="update" class="txtUpdate" value="<?php echo "Acct."." By"; ?>" disabled></td>
			    						<td class="txtUpdate"><input type="button" name="update" class="txtUpdate" value="<?php echo $row['accept']; ?>" disabled></td>
			    						<td class="txtUpdate"><input type="button" name="update" class="txtUpdate" value="<?php echo $row['date']; ?>" disabled></td>
			    					</form>
			    						<?php
			    					}
			    					else
			    					{
			    						?>
			    						<td class="txtUpdate"><input type="submit" name="allUpdate" class="txtUpdate" value="update"></td>
			    					</form>
			    						<td class="txtUpdate"><input type="button" class="txtUpdate" value="<?php echo $row['accept']; ?>" disabled></td>
			    						<td class="txtUpdate"><input type="button" name="update" class="txtUpdate" value="<?php echo $row['date']; ?>" disabled></td>
			    						<?php
			    					}
			    						if ($row['status']=="paid")
			    						{
			    							?>
			    							<td class="txtStatus"><input type="button" name="status" class="txtStatus" value="confirmed" disabled></td>
			    							<?php
			    						}
			    						else
			    						{
			    							?>
			    							<td class="txtStatus"><input type="button" name="status" class="txtStatus" value="Pay Now" onclick='payment("<?php echo $row['roll_no']; ?>","<?php echo $row['user_id']; ?>")'></td>
			    							<?php
			    						}
			    					?>
		    						</tr>
		    					</tbody>
		    				<?php
		    				$i++;
		    			}
		    			?>
		    					<tfoot>
		    						<tr>
		    							<th colspan="15">DB by onsi.in</th>
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
//------------------------------- tshirt View office End-------------------------------------------------------------------
//------------------------------- search_details Start-------------------------------------------------------------------
function search_details()
{
    	include("connect_online.php");
    	?>
    	<style type="text/css">
    		#roll_no[type=text]
    		{
    			height: 30px;
    			width: 250px;
    		}
    	</style>
    	<div class="container">
    		<div align="center">
	    		<h2 align="center">Search Roll Number</h2>
	    		<form method="POST">
	    			<input type="text" name="roll_no" id="roll_no" required autocomplete autofocus>
	    			<input type="submit" name="search" value="Search" class="btn btn-primary">
	    		</form>
    		</div>
    		<?php
    			extract($_REQUEST);
	    		if (isset($search)&&(!(empty($roll_no))))
	    		{
		    		//work area
					include("connect_online.php");
					//stablising db connection
			    	$test=mysql_connect($hostname,$username,$pwd);
			    	if ($test)
			    	{
			    		//selecting database
			    		$test_db=mysql_select_db($db);
			    		//preparing select Query
			    		$select="SELECT user_id,roll_no,first_name,last_name,size,color,status,accept,date FROM t_shirt WHERE roll_no='".$roll_no."'";
			    		$res=mysql_query($select);
			    		$count=mysql_num_rows($res);
			    		$row=mysql_fetch_assoc($res);
			    		if ($count>0)
			    		{
			    		?>
			    		<div>
			    			<p style="font-size: 25px; text-align: center;">Details</p>
			    			<table width="100%">
			    				<thead>
			    					<tr>
			    						<th>Roll No.</th>
			    						<th>Name</th>
			    						<th>Colour</th>
			    						<th>Size</th>
			    						<th colspan="2">Action</th>
			    						<th colspan="2">status</th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					<form method="POST" action="" onsubmit="return dbUpdate(<?php echo $row['user_id']; ?>,'custom')">
			    					<td class="txtRoll"><input type="text" name="roll_no" id="roll<?php echo $row['roll_no']; ?>" class="txtRoll" value="<?php echo strtoupper($row['roll_no']); ?>" readonly></td>
			    							<td class="txtName"><input type="text" name="name" id="name<?php echo $row['user_id']; ?>" class="txtName" value="<?php echo strtoupper($row['first_name'])." ".strtoupper($row['last_name']); ?>" readonly ></td>
			    							<td class="txtColor"><input type="text" name="color" id="color<?php echo $row['user_id']; ?>" class="txtColor" value="<?php echo strtoupper($row['color']); ?>" readonly ></td>
			    							<td class="txtSize"><input type="text" name="size" id="size<?php echo $row['user_id']; ?>" class="txtSize" value="<?php echo strtoupper($row['size']); ?>" readonly ></td>
			    						<?php
			    					if ($row['status']=="paid")
			    					{
			    						?>
			    						<td class="txtUpdate"><input type="button" name="update" class="txtUpdate" value="<?php echo "Acct."." By"; ?>" disabled></td>
			    						<td class="txtUpdate"><input type="button" name="update" class="txtUpdate" value="<?php echo $row['accept']; ?>" disabled></td>
			    						<td class="txtUpdate"><input type="button" name="update" class="txtUpdate" value="<?php echo $row['date']; ?>" disabled></td>
			    					</form>
			    						<?php
			    					}
			    					else
			    					{
			    						?>
			    						<td class="txtUpdate"><input type="submit" name="customUpdate" class="txtUpdate" value="update"></td>
			    					</form>
			    						<td class="txtUpdate"><input type="button" class="txtUpdate" value="<?php echo $row['accept']; ?>" disabled></td>
			    						<td class="txtUpdate"><input type="button" name="customUpdate" class="txtUpdate" value="<?php echo $row['date']; ?>" disabled></td>
			    						<?php
			    					}
			    						if ($row['status']=="paid")
			    						{
			    							?>
			    							<td class="txtStatus"><input type="button" name="status" class="txtStatus" value="confirmed" disabled></td>
			    							<?php
			    						}
			    						else
			    						{
			    							?>
			    							<td class="txtStatus"><input type="button" name="status" class="txtStatus" value="Pay Now" onclick='payment("<?php echo $row['roll_no']; ?>","<?php echo $row['user_id']; ?>")'></td>
			    							<?php
			    						}
			    						?>
			    				</tbody>
			    			</table>
			    		</div>
			    		<?php
			    		}
			    		else
			    		{
			    			?>
			    			<script type="text/javascript">
			    				alert("Roll Number Not Exist");
			    			</script>
			    			<?php
			    		}
		    		}
	    		}
    		?>
    	</div>
    <?php
}
//------------------------------- search_details End-------------------------------------------------------------------

//---------------function Area End-----------------------
?>
