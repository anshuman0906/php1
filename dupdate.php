<?php
session_start();
include("connect.php");
//echo "welcome user";
///echo "</br>";
$email=$_SESSION['doctor'];
if($_SESSION['doctor']=="")
{
	session_destroy();
	header("Location:login.php");
}
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css\dupdate.css" rel="stylesheet"  type="text/css">
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
<div id="body" style="background-image:url('images/s14.jpg');">
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>

	<form action="dedit.php" method="post" enctype="multipart/form-data">
<div id="t" style="color:white; margin-left:70px; margin-top:10px;border:1px solid transparent;font-family:lato;"><h1><?php echo $_SESSION['doctor'];?></h1></div>

<table>
<input type="hidden" name="id" value="<?php echo  $row['docid']; ?>"/>

<tr><td><span style="color:white; font-size:22px; font-family:lato;">Name:-</span></td></tr>
<tr><td><input   type="text" value="<?php echo $row['name'];?>" name="name" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;" /></td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">Father's Name:-</span></td></tr>
<tr><td><input   type="text" value="<?php echo $row['fname'];?>" name="fname" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">Gender:-</span></tr>
<tr><td><input type="radio" value="male" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='male'){?> checked <?php } ?>  name="a"/><span style="color:white; font-size:22px; font-family:lato;">Male</span>
<input type="radio" value="female" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='female'){?> checked <?php } ?>  name="a"/><span style="color:white; font-size:22px; font-family:lato;">Female</span>
</td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">timing:-</span></td></tr>
<tr><td><input  type="text" value="<?php echo $row['timing'];?>" name="timing" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">speciality:-</span></td></tr>
<tr><td><input  type="text" value="<?php echo $row['speciality'];?>" name="spec" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>

<tr><td><span style="color:white; font-size:22px; font-family:lato;">Contact:-</span></td></tr>
<tr><td><input   type="text" value="<?php echo $row['contact'];?>" name="mobile" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">fees:-</span></td></tr>
<tr><td><input   type="text" value="<?php echo $row['fees'];?>" name="fee" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">Address:-</span></td></tr>
<td><textarea  name="add"><?php echo $row['address'];?></textarea></td></tr>
</td></tr>
<td>
<input  href="plogout.php" type="submit" value="Click for update"style="height:40px;width:250px;border:none;border-radius:20px; outline:none;box-shadow:2px 5px 5px black;margin-left:50px; margin-top:20px; background-color:rgb(0,0,0,0.4) ;font-size:20px; font-family:lato; color:white;" >
	</td></table></form>

<?php	
}
?>
</div>
<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>
</div>


</body>
</html>
</body>
</html>