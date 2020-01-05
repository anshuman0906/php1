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
<link href="css\app.css" rel="stylesheet"  type="text/css">
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
<div id="header">Appointment <br/><span style="font-size:30px;"><?php echo $_SESSION['admin'];?></span></div>
<div id="ans">
<?php
include("connect.php");
$query="select * from tbl_appointment";
$res=mysql_query($query);
?>
<table border="1" style="border-collapse: collapse; width:100%;">
<tr>
<th>S.No</th>
<th>Dr.Name</th>
<th>Patient Name</th>
<th>Date of appointment</th>
<th>Status</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td style="background-color:#1c2a48;color:white;"><?php echo $a;?></td>
<?php 
$ddid=$row['docid'];
$query2="select * from tbl_doctor where docid='$ddid'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	$dname=$row2['name'];
}
?>
<td><?php echo $dname;?></td>
<?php 
$ppid=$row['ptid'];
$query3="select * from tbl_patient where ptid='$ppid'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$pname=$row3['name'];
}
?>
<td><?php echo $pname;?></td>
<td><?php echo $row['doa'];?></td>
<td><?php echo $row['status'];?></td>
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