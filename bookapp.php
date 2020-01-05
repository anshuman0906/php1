<?php
include("connect.php");
session_start();
$did=$_REQUEST['did'];
//echo $did;
$query="select * from tbl_doctor where docid='$did'";
$res=mysql_query($query);


 if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<link href="css\bookapp.css" rel="stylesheet"  type="text/css">
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
<div id="body" style="background-image:url('images/s12.jpg');">
<div id="black">
<div id="doc">
<div id="a" style="margin-left:650px; margin-top:60px;">
<img src="doctor/<?php echo $row['picture'];?>" height="100px" width="100px"/>
</div>
<div id="info">
<table>
<form action="booknow.php" method="post">
<input type="hidden" name="did" value="<?php echo $row['docid'];?>"/>
<tr><td><span style="color:white;font-size:16px;font-family:lato;margin-left:100px;">Name:-</span></td></tr>
<tr><td><input type="text" name="name" readonly value="<?php echo $row['name'];?>" style="color:black;font-family:lato;outline:none;border:none;font-size:18px;border-radius:20px;box-shadow:2px 5px 5px black; margin-left:150px;"/></td></tr>

<tr><td><span style="color:white;font-size:16px;font-family:lato;margin-left:100px;">Email:-</span></td></tr>
<tr><td><input type="email" name="email" readonly value="<?php echo $row['email'];?>" style="color:black;outline:none;border:none;font-family:lato;font-size:18px;border-radius:20px;box-shadow:2px 5px 5px black; margin-left:150px;"/><br/></td></tr>
<tr><td><span style="color:white;font-size:16px;font-family:lato; margin-left:100px;">Date:-</span></td></tr>
<tr><td><input type="date" name="date" style="color:black;font-family:lato;font-size:18px;border-radius:20px; outline:none;border:none;box-shadow:2px 5px 5px black; margin-left:150px;"/><br/></td></tr></div>
<tr><td><input type="submit" value="Click For Book" style="outline:none;border:none;height:30px;width:300px; margin-top:20px;background-color:#42d1d0;border-radius:20px;box-shadow:2px 5px 5px black; color:white;font-family:lato;font-size:18px; margin-left:90px;"/></td></tr>
</form>
</table>

</div>
</div>
</div>
<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>	
</div>

<?php
}

?>
</body>
</html>