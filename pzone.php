<?php
include("connect.php");
session_start();

 $email=$_SESSION['patient'];
 $query="select name from tbl_patient where email='$email'";
 $res=mysql_query($query);
 if($row=mysql_fetch_array($res,MYSQL_BOTH))
 {
	 $NAME=$row['name'];
	 //echo $NAME;
 }

 if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}

?>
<html>
<head>
<link href="css\pzone.css" rel="stylesheet"  type="text/css">
</head>
<body>
<div id="outer">
	 <div id="header">
	<div id="logo">
	<a href="#"><img src="images\logo.png"/> </a>
	 
	
	<div id ="menu2">
	 <ul>
		  
	 <li> <a href="plogout.php" >Logout</a></li>
	 <li> <a href="pfeed.php" >Feedback</a></li>
	 <li> <a href="pchange.php">Change Password</a></li>
			  	 <li> <a href="pupdate.php">Update Profile</a></li>
		    <li> <a href="discuss.php">Discussion Board</a></li>
				 <li> <a href="myappointment.php">My Appointment</a></li>
				 <li> <a href="bookappoitnment.php">Book Appointment </a></li>
		 <li> <a href="pzone.php">Home</a></li>
			</ul>
			</div>
			</div>
			</div>
<hr style="background-color:#3eb5a8;height:5px;width:autopx;margin-top:-2px;"/>
<div id="welcome"><span style="font-size:50px;"> Welcome<?echo $row['name'];?></span><br/><span style="font-size:30px;"><?php echo $_SESSION['patient'];?></span></div>
<div id="doc" style="background-image:url('images/s6.jpg');">
<div id="white">

<div id ="text">

<b>"Declare the past, diagnose the present, foretell the future." </b>
</div>






</div>
<div id="uj" style="	background-color:#e5f6fe;font-family:century gothic;"> Patient portal is a secure online website that gives patients convenient, 24-hour access to personal health information from anywhere with an Internet 
connection. Using a secure username and password, patients can view health information such as:
<ul>
<li>Recent doctor visits</li>
<li>Discharge summaries</li>
<li>Medications</li>
<li>Immunizations</li>
<li>Allergies</li>
<li>Lab results</li>
<h3>Some patient portals also allow you to:</h3>
<ul>
<li>Securely message your doctor</li>
<li>Request prescription refills</li>
<li>Schedule non-urgent appointments</li>
<li>Check benefits and coverage</li>
<li>Update contact information</li>
<li>Make payments</li>
<li>Download and complete forms</li>
<li>View educational materials</li>
</ul>
With your patient portal, you can be in control of your health and care.  Patient portals can also save your time,
 help you  communicate with your doctor, and support care between visits.
 </div>

<div id="im"style="background-image:url('images/');"></div>

	<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>

	</div>
	

	
</body>
</html>