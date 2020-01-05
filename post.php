<?php
session_start();
$qid=$_REQUEST['qid'];

$_SESSION['patient'];

 if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}


?>
<html>
<head>
<link href="css\post.css" rel="stylesheet"  type="text/css">
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
<div id="body" style="background-image:url(images/s17.jpg);">
<div id="black">
<div id="text">Thanks For your Opinion.</div>
<form action="answer.php" method="post">
<input type="hidden" name="qid" value="<?php echo $qid;?>"/>
<textarea name="ans" maxlength="200"></textarea>
<br/>

<input type="submit" value="Click for Post"/>
</div>
</div>
<div id="footer">
	<div id="show" style="font-size:16px; float:left; ">&copy;reserved</div>
	<div id="a" style="font-size:16px; float:right;"> Createrd by Anshuman Tripathi</div>
</div>
</div>
</form>
</body>
</html>