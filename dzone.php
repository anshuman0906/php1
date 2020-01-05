<?php
session_start();
include("connect.php");

 $email=$_SESSION['doctor'];
 $query="select name from tbl_doctor where email='$email'";
 $res=mysql_query($query);
 if($row=mysql_fetch_array($res,MYSQL_BOTH))
 {
	 $NAME=$row['name'];
	 //echo $NAME;
 }
 if($_SESSION['doctor']=="")
{
	session_destroy();
	header("Location:login.php");
}

?>
<html>
<head>
<link href="css\dzone.css" rel="stylesheet"  type="text/css">
</head>
<body>
<div id="outer">
	 
	<div id="logo">
	<a href="#"><img src="images\logo.png"> </a>
	 
	
	<div id ="menu2">
	 <ul>
		  
	 <li> <a href="dlogout.php" >Logout</a></li>

	 <li> <a href="dchange.php">Change Password</a></li>
			  	 
		    <li> <a href="dupdate.php">Update Profile</a></li>
				 <li> <a href="dcancle.php">Cancel Appointment</a></li>
				 <li> <a href="dview.php">View Appointment </a></li>
		 <li> <a href="dzone.php">Home</a></li>
			</ul>
			</div>
			</div>
<hr style="background-color:#3eb5a8;height:5px;width:autopx;margin-top:-2px;"/>
<div id="welcome"><span style="font-size:50px;"> Welcome Doctor</span><br/><?php echo $_SESSION['doctor'];?></div>
<div id="doc" style="background-image:url('images/s6.jpg');">
<div id="white">

<div id ="text">

<b>"Always laugh when you can, it is cheap medicine." </b>
</div>






</div>

<div id="fe"><h1><u>DOCTOR PORTAL</u></h1>
<ul>
<li>List of appointments booked for the current day or any future day</li>
<li>List of appointments booked for the current day or any future day</li>
<li>List of outpatients most recently seen by the physician</li>
<li>List of inpatients admitted in the hospital under the care of the physician</li>
<li>List of pending surgeries scheduled for the physician</li>
<li>Patient history as a drill down from each of the above list</li>
<li>Drill down to reports/charts for each episode</li>
<li>Alerts/reminders to the doctor Results of ordered laboratory/radiology tests</li>
<li>Physician recordings under the four broad heads - SOAP (Subjective, Objective, Assessment and Plan) as followed by most physicians all over the world.</li>
</ul>
</div>

<div id="im" style="background-image:url('images/ui.png');"></div>

<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>	
	</div>
	
</body>
</html>