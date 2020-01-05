<?php
include("connect.php");
session_start();
$spec=$_POST['spec'];
$query="select * from tbl_doctor where speciality='$spec'";
$res=mysql_query($query);


 if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}

?>
<html>
<head>
<link href="css\book.css" rel="stylesheet"  type="text/css">
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
<div id="table" style=" background-image:url('images/k.png');">
<div id="black" ><div style="margin-left:380px; margin-top:50px;color:white;font-size:55px;text-align:justify; font-family:lato; border:1px solid transparent;"><b>We Found Best For You</b></div>
<table border="" align="center" cellpadding="2px;" style="margin-top:50px;">
<tr>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;">S.NO</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px;font-family:lato;">Doctor Name</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px;font-family:lato;">Gender</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px;font-family:lato;">Address</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px;font-family:lato;">Fees</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px;font-family:lato;">Timing</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px;font-family:lato;">Mobile</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px;font-family:lato;">Email</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px;font-family:lato;">Appointment</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<tr>
	<td style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px;font-family:lato;"><?php echo $a;?></td>
	<td style="background-color:rgb(0,0,0,0.4);color:white;font-size:20px;font-family:lato;"><?php echo $row['name'];?></td>
	<td style="background-color:rgb(0,0,0,0.4);color:white;font-size:20px;font-family:lato;"><?php echo $row['gender'];?></td>
	<td style="background-color:rgb(0,0,0,0.4);color:white;font-size:20px;font-family:lato;"><?php echo $row['address'];?></td>
	<td style="background-color:rgb(0,0,0,0.4);color:white;font-size:20px;font-family:lato;"><?php echo $row['fees'];?></td>
	<td style="background-color:rgb(0,0,0,0.4);color:white;font-size:20px;font-family:lato;"><?php echo $row['timing'];?></td>
	<td style="background-color:rgb(0,0,0,0.4);color:white;font-size:20px;font-family:lato;"><?php echo $row['contact'];?></td>
	<td style="background-color:rgb(0,0,0,0.4);color:white;font-size:20px;font-family:lato;"><?php echo $row['email'];?></td>
	<td style="background-color:rgb(0,0,0,0.4);color:white;font-size:20px;font-family:lato;"><a href="bookapp.php?did=<?php echo $row['docid'];?>" style="text-decoration:none;color:white;">Book Appointment</a></td>
	</tr>
	<?php
	$a++;
}
?>
</table>
</div>
</div>
<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>
</div>	
</body>
</html>
	