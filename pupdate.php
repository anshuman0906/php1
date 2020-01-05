<?php
session_start();
include("connect.php");
//echo "welcome user";
///echo "</br>";
$email=$_SESSION['patient'];
 if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}

$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);

?>
<html>
<head>
<link href="css\pupdate.css" rel="stylesheet"  type="text/css">
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
<div id="body" style="background-image:url('images/s14.jpg');">
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>

	<form action="pedit.php" method="post">
<div id="t" style="color:white; margin-left:70px; margin-top:10px;border:1px solid transparent;font-family:lato;"><h1><?php echo $_SESSION['patient'];?></h1></div>

<table>
<input type="hidden" name="id" value="<?php echo  $row['ptid']; ?>"/>

<tr><td><span style="color:white; font-size:22px; font-family:lato;">Name:-</span></td></tr>
<tr><td><input   type="text" value="<?php echo $row['name'];?>" name="name" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;" /></td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">Father's Name:-</span></td></tr>
<tr><td><input   type="text" value="<?php echo $row['fname'];?>" name="fname" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">Gender:-</span></tr>
<tr><td><input type="radio" value="male" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='male'){?> checked <?php } ?>  name="a"/><span style="color:white; font-size:22px; font-family:lato;">Male</span>
<input type="radio" value="female" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='female'){?> checked <?php } ?>  name="a"/><span style="color:white; font-size:22px; font-family:lato;">Female</span>
</td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">Age:-</span></td></tr>
<tr><td><input  type="text" value="<?php echo $row['age'];?>" name="timing" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">pincode:-</span></td></tr>
<tr><td><input  type="text" value="<?php echo $row['pincode'];?>" name="spec" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>

<tr><td><span style="color:white; font-size:22px; font-family:lato;">Contact:-</span></td></tr>
<tr><td><input   type="text" value="<?php echo $row['contact'];?>" name="mobile" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
<tr><td><span style="color:white; font-size:22px; font-family:lato;">City:-</span></td></tr>
<tr><td><input   type="text" value="<?php echo $row['city'];?>" name="city" style="height:30px;width:350px;border:none;border-radius:15px; outline:none;box-shadow:2px 5px 5px black;margin-left:30px;"/></td></tr>
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