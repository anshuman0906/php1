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
<link href="css\contact.css" rel="stylesheet"  type="text/css">
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
<div id="header">Contact <br/><span style="font-size:30px;"><?php echo $_SESSION['admin'];?></span></div>
<div id="ans">
<?php
include("connect.php");
$query="select * from tbl_contact";
$res=mysql_query($query);
?>
<table border="1" style="border-collapse: collapse; width:100%;">
<tr>
<th>S.No</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Message</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td style="background-color:#1c2a48;color:white;"><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['date'];?></td>
</tr>
<?php
$a++;
}
?>
</table>
</center>
</div>
</div>
</body>
</html>