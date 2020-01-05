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
<link href="css\side.css" rel="stylesheet"  type="text/css">
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
<div id="header">Medicounsel</div>
<div id="one">
<a href="doctor.php"><div id="onea"><div id="t" style="background-image:url('image/do.png');"></div> Doctors</div></a>
<a href="patient.php"><div id="oneb"><div id="k" style="background-image:url('image/p.png');"></div>Patient</div></a>
<a href="contact.php"><div id="onec"><div id="i" style="background-image:url('image/c.png');"></div>Contact</div></a>
<a href="dis.php"><div id="oned"><div id="u" style="background-image:url('image/d.png');"></div>Disscussion</div></a>
</div>
<div id="two">
<a href="feed.php"><div id="twoa"><div id="x" style="background-image:url('image/f.png');"></div>Feedback</div></a>
<a href="app.php"><div id="twob"><div id="y" style="background-image:url('image/ap.png');"></div>Appointments</div></a>
<a href="change.php"><div id="twoc"><div id="q" style="background-image:url('image/ch.png');"></div>Change Password</div></a>
<a href="logout.php"><div id="twod"><div id="z" style="background-image:url('image/l.jpg');"></div>Logout</div></a>
</div>
</div>


</body>
</html>