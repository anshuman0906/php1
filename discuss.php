<?php
include("connect.php");
session_start();
$query="select * from tbl_question";
$res=mysql_query($query);
$_SESSION['patient'];

 if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}


?>
<html>
<head>
<link href="css\disscuss.css" rel="stylesheet"  type="text/css">
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
<div id="body" style="background-image:url('images/s14.jpg')";>
<div id="black"><div id="text"><b>Disscuss any thing with anyone.</b></div>
<div id="ques"><div id="text2"></div>
<form action="question.php" method="post">
<textarea name="ques"></textarea>
<br/>
</div>
<input type="submit" value="Add Question"/>

</form>

<table border="1">
<tr>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;">S.NO</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;">Question</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;">Post Answer</th>
<th style="background-color:rgb(0,0,0,0.6);color:white;font-size:24px; font-family:lato;">View Answer</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<tr>
	<td style="background-color:rgb(0,0,0,0.6);;color:white;font-size:24px; font-family:lato;"><?php echo $a;?></td>
	<td style="background-color:transparent;color:white;font-size:20px;font-family:lato;"><?php echo $row['question'];?></td>
	<td  style="background-color:transparent;color:white;font-size:20px;font-family:lato;"><a href="post.php?qid=<?php echo $row['0'];?> " style="text-decoration:none;color:white;">Post Answer</a></td>
	<td  style="background-color:transparent;color:w;font-size:20px;font-family:lato;"><a href="view.php?qid=<?php echo $row['0'];?>" style="text-decoration:none;color:white;">View answer</a></td>


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