<?php
include("connect.php");
session_start();
$query="select distinct speciality from tbl_doctor";
$res=mysql_query($query);


 if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}

?>
<html>
<head>
<link href="css\book appointment.css" rel="stylesheet"  type="text/css">
</head>
<body>
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
<div id="app" style="background-image:url('images/book.jpg');">
<div id="text" style="margin-left:400px; margin-top:120px;color:white;font-size:55px;text-align:justify; font-family:Georgia; height:100px;width:550px; border:1px solid transparent;"><b>A Destination for&nbsp &nbsp &nbsp&nbspAdvanced Care</b></div>
<div id="t2" style="margin-left:450px;color:white; text-align:justify;height:10px;width:450px;border:1px solid transparent;margin-top:50px;">Get a Second Opinion From The Worlds Best Doctors</div>
<form action="book.php" method="post">
<div id="select" style="margin-left:300px; margin-top:10px; border:1px solid transparent;">
<select name="spec" style="height:40px;width:650px;border:none;border-radius:15px; outline:none; box-shadow:2px 5px 5px black;" >
<option value="">&nbsp &nbsp &nbsp --Select Speciality--</option>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<option><?php echo $row['speciality'];?></option>
<?php
}
?>
</select>
</div>
<div id="b" style="margin-left:520px; margin-top:70px;">
 <span style="box-shadow:2px 5px 5px 5px black;border-radius:15px;"><input type="submit" value="Click For Book" style="height:40px;width:250px;border:none; outline:none;background-color:#42d1d0;color:white;border-radius:15px; font-size:20px;margin-top:10px;font-family:"/></span></div>
</form>
</div>
<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>	
</body>
</html>