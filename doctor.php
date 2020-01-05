<?php

?>
<html>
<head>
<link href="css\docreg.css" rel="stylesheet"  type="text/css">
<script src="js\slider.js" rel="javascript" type="text/javascript"></script>
</head>
<body onload="slide()">
<div id="outer">
	 
	<div id="logo">
	<a href="#"><img src="images\logo.png"> </a>
	<div id="submenu">
	 <ul>
		  
	
			  	 <li> <a href=""></a></li>
		    <li> <a href="#">Call-us 8299038746</a></li>
				 <li> <a href="#">Ambulence</a></li>
				 <li> <a href="#">Emergency</a></li>
		 <li> <a href="login.php">Login</a></li></div>
			</ul>
	 
	 </div>
	 
	
	<div id ="menu2">
	 <ul>
		  
	 <li> <a href="login.php">Appointment</a></li>
	 <li> <a href="gallery.php">Gallery</a></li>
	 <li> <a href="contact.php">Contact</a></li>
			  	
		    <li> <a href="patient.php">Patient</a></li>
				 <li> <a href="doctor.php">Doctor</a></li>
				 <li> <a href="about.php">About </a></li>
		 <li> <a href="index.php">Home</a></li></div>
			</ul>


	<hr style="background-color:#3eb5a8;height:5px;width:autopx;margin-top:-2px;"/>
	
	
	<div id="dblack" style="background-image:url('images/10.jpg'); ">
	<img src="images/13.jpg" style="margin-left:320px; margin-top:20px; border-radius:50px; box-shadow:2px 2px 5px black;">
<div id="body">
<h2 style="color:white; font-family:Lato; margin-left:250px; ">Doctor Registration Form</H2>
<center>
<div id="tablerow" style="float:left;margin-left:50px; height:autopx;width:autopx;">
<form action="dcode.php" method="post" enctype="multipart/form-data">
<table>
<tr><td style="color:black; font-family:Lato; ">Doctor Name:-</td></tr><tr><td><input type="text" name="doctor" placeholder="Dr.Name" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr><td style="color:black; font-family:Lato;">Father Name:-</td></tr><tr><td><input type="text" name="fname" placeholder="f'Name" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; " ></td></tr>
<tr><td style="color:black; font-family:Lato;">Gender:-</td></tr><tr><td><input type="radio" name="a" value="male"><span style="color:black; font-family:Lato; ">Male</span>
                         <input type="radio" name="a" value="female"><span style="color:black; font-family:Lato;">Female</span></td></tr>
<tr><td style="color:black; font-family:Lato;">Email:-</td></tr><tr><td><input type="email" name="email" placeholder="Email" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; " ></td></tr>
<tr><td style="color:black; font-family:Lato;">Password:-</td></tr><tr><td><input type="password" name="password" placeholder="Password" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; " ></td></tr>
<tr><td style="color:black; font-family:Lato;">Picture:-</td></tr><tr><td><input type="file" name="pic" value="uplode Pic" ></td></tr></table></div>

<table style="margin-left:-500px;"><tr><td style="color:black; font-family:Lato;">fees:-</td></tr><tr><td><input type="number" name="fees" placeholder="Fee" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr><td style="color:black; font-family:Lato;">Timing:-</td></tr><tr><td><input type="text" name="timing" placeholder="Timing" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr><td style="color:black; font-family:Lato;">Speciality:-</td></tr><tr><td><select name="b" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "><option style="color:black; font-family:Lato;  box-shadow:2px 2px 5px black; ">Surgeon</option><option style="color:black; font-family:Lato;  box-shadow:2px 2px 5px black; ">Physician</option><option style="color:black; font-family:Lato;  box-shadow:2px 2px 5px black; ">Eye specialist</option><option style="color:black; font-family:Lato;  box-shadow:2px 2px 5px black; ">Neuro Suregon</option><option style="color:black; font-family:Lato;  box-shadow:2px 2px 5px black; ">Orthon Physician</option></td></tr>
<tr><td style="color:black; font-family:Lato;">Address:-</td></tr><tr><td><input type="textarea" name="address" placeholder="Address" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr><td style="color:black; font-family:Lato;">Contact:-</td></tr><tr><td><input type="number" name="contact" placeholder="Contact" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
</table>
<tr ><td ><input type="submit"  value="Registration" style="margin-top:50px; margin-left:-890px;  margin-bottom:px;height:40px;width:150px;background-color:; border:none; border-radius:15px; outline:none;  box-shadow:2px 2px 5px black; background-color:#42d1d0;font-size:20px;color:white;"></td></tr></form>
 <h4 style="margin-left:-550px; margin-top:20px; margin-bottom:30px;">Already Register?<a href="login.php">Then click here</a><h4>

</center>
</div>
</div>
	
	<div id="footer">
		<div id="one">
			<h3><u>Home</h3></u>
			
			<u><a href="about.php" style="color:#f0f0f0;">About us</a><br/>
			<a href="doctor.php" style="color:#f0f0f0;">Doctor</a><br/>
			<a href="patient.php" style="color:#f0f0f0;">Patient</a><br/>
			<a href="contact.php" style="color:#f0f0f0;">Contact Us</a><br/>
			<a href="login.php" style="color:#f0f0f0;">Login</a></u><br/>
		
		
		</div>
		<div div="two">
			<h3><u>Patient</h3></u>
			
			<u><a href="login.php" style="color:#f0f0f0;">Book Appointment</a><br/>
			<a href="login.php" style="color:#f0f0f0;">View Appointment</a><br/>
			<a href="login.php" style="color:#f0f0f0;">	Book Appointment</a><br/>
			<a href="login.php" style="color:#f0f0f0;">Change Password</a><br/>
			<a href="login.php" style="color:#f0f0f0;">Disscussion</a></u><br/>
			
		</div>
		<div id="three">
				<h3><u>Doctor</u></h3>
			
			<u><a href="login.php" style="color:#f0f0f0;">My Appointment</a><br/>
			<a href="login.php" style="color:#f0f0f0;">View Appointment</a><br/>
			<a href="login.php" style="color:#f0f0f0;">	Cancel Appointment</a><br/>
			<a href="login.php" style="color:#f0f0f0;">Change Password</a><br/>
		
		</div>
		<div id="four">
				<h3><u>STAY IN TOUCH</u></h3>
		
			Medicounsel Tower<br/>
				 Sarita Vihar<br/>
				Lane No:-252/2<br/>
				New Delhi<br/>
			
			</div>
			<div id="sp">
			
			<div id="im1">
			<a href="https://www.facebook.com/"><img src="images/51.jpg"/></a></div>
			<div id="im2">
			<a href="https://www.instagram.com/accounts/login/"><img src="images/52.jpg"/></a></div>
			<div id="im3">
			<a href="#"><img src="images/53.jpg"/></a></div>
			
			
		</div>
		<div id="n">
		<div id="c">&copyrightreserved</div>
		<div id="d"> Created by:- Anshuman Tripathi</div>
		</div>


</div>



</div>



</body>
</html>