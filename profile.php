<html>
<head>
</head>
<style>
#outer
{
	height:1300px;
	width:100%;
	border:1px solid;
	background-color:blue;
	background-image:url('../image/i.jpg');
   background-repeat:no repeat;
    background-size:cover;
	
}
#out
{
	height:1300px;
	width:100%;
	border:1px solid;
	background-color:white;
	//background-image:url('../image/i.jpg');
   background-repeat:no repeat;
    background-size:cover;
	
}
#up
{
	height:100px;
	width:100%;
	border:1px solid;
	background-color:green;
	margin-top:50px;
	background-image:url('../image/i.jpg');
   background-repeat:no repeat;
    background-size:cover;
}

#left
{
	height:1300px;
	width:300px;
	border:1px solid;
	background-color:#00e6e6;
	float:left;
	margin-left:50px;
	margin-top:-153px;
	background-image:url('../image/i.jpg');
   background-repeat:no repeat;
    background-size:cover;
}
#box
{
	height:1000px;
	width:980px;
	//border:1px solid;
	//background-color:red;
	float:left;
	margin:70px;
}
.one
{
	height:330px;
	width:980px;
	//border:1px solid;
	//background-color:blue;
}
.boxx
{
	height:280px;
	width:280px;
	border:1px solid;
	background-color:#00e6e6;
	float:left;
	margin:20px;
	background-image:url('../image/i.jpg');
   background-repeat:no repeat;
    background-size:cover;
}
.boxxx
{
	height:280px;
	width:280px;
	border:1px solid;
	background-color:#00e6e6;
	float:left;
	//margin:20px;
	//background-image:url('../image/i.jpg');
   background-repeat:no repeat;
    background-size:cover;
}


#pic
{
	height:150px;
	width:150px;
	border:1px solid;
	background-color:red;
	margin-top:50px;
background-image:url('../image/i.jpg');
   background-repeat:no repeat;
    background-size:cover;	
	
}
.picc
{
	height:100px;
	width:100px;
	//border:1px solid;
	//background-color:red;
	margin-top:50px;	
	background-image:url('../image/doc.png');
   background-repeat:no repeat;
    background-size:cover;
}
ul li a
{
	text-decoration:none;
	font-size:20px;
	margin-top:10px;
	
}
ul li
{
	margin-top:30px;
	height:50px;
	width:200px;
	background-color:white;
	list-style-type:none;
	border-radius:10px;
	margin-left:10px;
	align:center;
}
ul li:hover
{
	height:50px;
	width:200px;
	background-color:#00e6e6;
}
.boxx a
{
	text-decoration:none;
	font-size:30px;
	margin-top:50px;
	color:white;
}
div#out{
    background:rgba(255,255,255,0.8);
}
div.boxxx{
    background:rgba(0,223,223,0.6);
}
</style>
<body>
<div id="outer">
<div id="out">
<div id="up">
<p style="font-size:70px;color:white;margin-left:700px;margin-top:-1px;">Admin Zone</p>
</div>
<div id="left">

<div id="pic" style="margin-left:70px;"></div>
<p style="font-size:35px;color:black;margin-left:10px;">Welcome to Admin</p>
<ul>
<li><a href="patient.php"><b style="margin-top:20px;">View All Patients</b></li>
<li><a href="doctor.php">All Doctors</li>
<li><a href="contact.php">View All Contacts</li>
<li><a href="app.php">View All Appointments</li>
<li><a href="dis.php">View All Disscussion Bord</li>
<li><a href="feed.php">View All Feedback</li>
<li><a href="change.php">Change Password</li>
<li><a href="logout.php">Logout</li>

</ul>
</div>
<center>
<div id="box">
<div class="one">
<center>
<div class="boxx">
<div class="boxxx">
<div class="picc"></div>
<a href="patient.php">VIEW ALL PATIENTS</a>
</div>
</div>
<div class="boxx">
<div class="boxxx">
<div class="picc"></div>
<a href="doctor.php">VIEW ALL DOCTORS</a>
</div>
</div>
<div class="boxx">
<div class="boxxx">
<div class="picc"></div>
<a href="contact.php">VIEW ALL CONTACTS</a>
</div>
</div>
</div>
<div class="one">
<div class="boxx">
<div class="boxxx">
<div class="picc"></div>
<a href="app.php">VIEW ALL APPOINTMENTS</a>
</div>
</div>
<div class="boxx">
<div class="boxxx">
<div class="picc"></div>
<a href="dis.php">VIEW ALL DISCUSSION BORD</a>
</div>
</div>
<div class="boxx">
<div class="boxxx">
<div class="picc"></div>
<a href="feed.php">VIEW ALL FEEDBACKS</a>
</div>
</div>
</div>
<div class="one">
<div class="boxx">
<div class="boxxx">
<div class="picc"></div>
<a href="change.php">CHANGE PASSWORD</a>
</div>
</div>
<div class="boxx">
<div class="boxxx">
<div class="picc"></div>
<a href="logout.php">LOGOUT</a>
</div>
</div>
<div class="boxx">
<div class="boxxx">
<div class="picc"></div>
</div>
</div>
</div>
</div>
</center>

<?php
session_start();
//echo "welcome user ji";
//echo $_SESSION['admin'];
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>
<br/>

</div>
</div>
</body>
</html>