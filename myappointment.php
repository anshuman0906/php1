<?php
session_start();
include("connect.php");
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
$_SESSION['patient'];

 if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['ptid'];
}
$query2="select * from tbl_appointment where ptid='$pid' ";
$res2=mysql_query($query2);
?><html>
<head>
<link href="css\myappointment.css" rel="stylesheet"  type="text/css">
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
<div id="body" style="background-image:url('images/s15.jpg');">
<div id="my"><h1>	My Appointment</h1></div>
<div id="table"><table border="1px" cellpadding="-1px;">
<tr>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;">S.No</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;">Dr name</th>
<th  style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;">Patient Name</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;">Date</th>
</tr>
<?php
$a=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	?>
<tr>
<td style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;"><?php echo $a;?></td>
<?php $ppid=$row2['ptid'];
$query3="select * from tbl_patient where ptid='$ppid'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$pname=$row3['name'];
}
?>
<?php $did=$row2['docid'];
$query4="select * from tbl_doctor where docid='$did'";
$res4=mysql_query($query4);
if($row4=mysql_fetch_array($res4,MYSQL_BOTH))
{
	$dname=$row4['name']; 
 
}	
?>
<td style="background-color:rgb(0,0,0,0.4);;color:white;font-size:20px; font-family:lato;"><?php echo $dname; ?></td>
<td style="background-color:rgb(0,0,0,0.4);;color:white;font-size:20px; font-family:lato;"><?php echo $pname; ?></td>
<td style="background-color:rgb(0,0,0,0.4);;color:white;font-size:20px; font-family:lato;"><?php echo $row2['date'];?></td>
	
</tr>
<?php
$a++;
}
?>
</table>

</div>
<div id="blank"></div>
</div>

</div>
<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>
</div>




</body>
</html>