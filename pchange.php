<?php
session_start();

 if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
?>
<html>
<head>
<link href="css\changepass.css" rel="stylesheet"  type="text/css">
</head>
<body>
<div id="outer">
	 
	<div id="logo">
	<a href="#"><img src="images\logo.png"> </a>
	 
	
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
<hr style="background-color:#3eb5a8;height:5px;width:autopx;margin-top:-2px;"/>

<div id="body" style="background-image:url('images/s8.jpg');">
<div id="black">
<div id="change">
<div id="c" style="font-family:;font-size:40px;color:white; text-align:center; margin-left:-130px;">Change Password</div>
<div id="h" style="margin-top:30px;margin-left:90px;">
<table>
<form action="pchangecode.php" method="post">
<tr><td><span style="color:white; font-size:22px;">Old Password:-</span></td></tr><tr><td><input type="text" name="op" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
<tr><td><span style="color:white; font-size:22px;">New Password:-</span></td></tr><tr><td><input type="text" name="np" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
<tr><td><span style="color:white; font-size:22px;">Confirm password:-</span></td></tr><tr><td><input type="text" name="cp" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr></table>
<span style="box-shadow:2px 5px 5px 5px black;border-radius:15px;margin-left:90px" ><input type="submit" value="Change" style="height:30px;width:250px;border:none; outline:none;background-color:#42d1d0;color:white;border-radius:15px; font-size:22px;margin-top:30px;font-family:"/></span></form>
</div>
</div>
</div>
</div>
<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>
</body>
</html>