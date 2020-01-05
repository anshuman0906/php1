<?php
session_start();
include("connect.php");
if($_SESSION['doctor']=="")
{
	session_destroy();
	header("Location:login.php");
}

$email=$_SESSION['doctor'];
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$did=$row['docid'];
}
$query2="select * from tbl_appointment where docid='$did'";
$res2=mysql_query($query2);
?>
<html>
<head>
<link href="css\dview.css" rel="stylesheet"  type="text/css">
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
<div id="ab" style="background-image:url(images/s10.jpg);">
<div id="black">
<form><h1><u>View Appointment</u></h1>
<table border="1" align="center" style="border-collapse: collapse; width:100%;">
<tr>
<th>S.No.</th>
<th>patient name</th>
<th>DOA</th>
<th>Status</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr>
<td style="background-color:#1c2331;color:white;" ><?php echo $a; ?></td>

<?php $pid=$row2['ptid']; 
$query3="select * from tbl_patient where ptid='$pid'";
$res3=mysql_query($query3);
while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$pname=$row3['name'];
}
?>

<td><?php echo $pname;?></td>
<td><?php echo $row2['doa']; ?></td>
<td><?php echo $row2['status']; ?></td>
<td><?php echo $row2['date']; ?></td>
</tr>
<?php
$a++;
}
?>
</table>
</form>
</div>
</div>
<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>	
	</body>
	</html>