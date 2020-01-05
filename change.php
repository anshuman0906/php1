<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>
<html>
<head>
<link href="css\change.css" rel="stylesheet"  type="text/css">
</head>
<body>
<div id="outer">
<div id="sidemenu">
<div id="logo" style="background-image:url('image/12.jpg');"></div>
<div id="menu">
<ul>
<li><a href="doctor.php">View all Doctor</a></li><br/>
<li><a href="patient.php">View all Patient</a></li><br/>
<li><a href="contact.php">View all Contact</a></li><br/>
<li><a href="dis.php">View all Disscussion</a></li><br/>
<li><a href="feed.php">View all Feedback</a></li><br/>
<li><a href="app.php">View all Appointment</a></li><br/>
<li><a href="change.php">Change Password</a></li><br/>
<li><a href="logout.php">Logout</a></li><br/>
</div>
</div>
<div id="header">Change Password <br/><span style="font-size:30px;"><?php echo $_SESSION['admin'];?></span></div>
<div id="ans" style="background-image:url('image/s13.jpg');">


<form action="changecode.php" method="post">
<div id="pi">&nbsp &nbsp &nbsp &nbsp&nbsp Change Password
<input type="text" name="op" placeholder="Enter Old Password" style=""/ ><br/>
<input type="text" name="np" placeholder="Enter New Password"/><br/>
<input type="text" name="cp" placeholder="Enter Confirm Password"/><br/>
<input type="submit" value="Change" style="font-size:25px; background-color:rgb(0,0,0,0.8); color:white;"/>
</div>
</form>
</div>
</div>
</body>
</html>