<?php
include("connect.php");
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
$query="select question from tbl_question";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css\dis.css" rel="stylesheet"  type="text/css">
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
<div id="header">Disscussion <br/><span style="font-size:30px;"><?php echo $_SESSION['admin'];?></span></div>
<div id="ans">
<table border="1" style="border-collapse: collapse; width:100%;">
<tr>
<th>S.No.</th>
<th>Quetions</th>
<th>Answer</th>
<th>Delete</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
?>
<tr>
<td style="background-color:#1c2a48;color:white;"><?php echo $a;?></td>
<td><?php echo $row['question'];?></td>
<td><a href="/..view.php?qid=<?php echo $row['answer']; ?>">Answer</a></td>
<td><a href="#">Delete</a></td>
</tr>
<?php
$a++;
}
?>
</table>
</div>
</div>
</body>
</html>