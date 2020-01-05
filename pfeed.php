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
<link href="css\pfeed.css" rel="stylesheet"  type="text/css">
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
<div id="body" style="background-image:url('images/s9.png');">
<div id="black"><div id="text"><b>Redefining Healthcare </b><p style="font-size:30px;"><b>It's Time to Change the Future of Healthcare</b></p></div>
</div>
<div id="image" style="background-image:url('images/i.png');">
<div id="form" style="background-image:url('images/s11.jpg'); border:none;">
<div id="black2">
<form action="pfeedcode.php" method="post">
<div style="color:white;font-size:40px;font-family:lato;margin-top:10px;margin-top:20px;">Feedback</b></div><br/>
<textarea maxlength="200" name="a" style="height:400px;width:500px; color:white;background-color:transparent; margin-left:150px;font-family:lato; font-size:22px;"></textarea><br/>
<input type="submit" value="SEND"/>

</form>
</div>
</div>
</div>
<div id="vie">
</div>

<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>	
</div>
</body>
</html>