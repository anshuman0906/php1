<?php


?>
<html>
<head>
<link href="css\ptreg.css" rel="stylesheet"  type="text/css">
</head>
<body>
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
		  
	 <li> <a href="login.php" >Appointment</a></li>
	 <li> <a href="gallery.php" >Gallery</a></li>
	 <li> <a href="contact.php">Contact</a></li>
			  	
		    <li> <a href="patient.php">Patient</a></li>
				 <li> <a href="doctor.php">Doctor</a></li>
				 <li> <a href="about.php">About </a></li>
		 <li> <a href="index.php">Home</a></li></div>
			</ul>

	
	<hr style="background-color:#3eb5a8;height:5px;width:autopx;margin-top:-2px;"/>
	
	
	
	<div id="pt" style="background-image:url('images/11.jpg'); border:1px solid transparent; margin-top:-5px;">
	<img src="images/12.jpg" style="margin-left:300px; margin-top:50px; border-radius:50px; box-shadow:2px 2px 5px black;">
	<h1 style="color:white;font-family:Lato; margin-left:150px;">Patient Registration Form<H1>
	
	<div id="tablerow" style="float:left;margin-left:50px; height:autopx;width:autopx;">

<form action="pcode.php" method="post">
<table>

<tr><td >Patient Name:-</td></tr><tr><td><input type="text" name="patient" placeholder="Name" required="true" style="height:31px;width:260px; outline:none;border-radius:10px;border:none; box-shadow:2px 2px 5px black; "></td></tr>
<tr><td >Father Name:-</td></tr><tr><td><input type="text" name="fname" placeholder="Fname" required="true" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr><td >Gender:-</td></tr><tr><td ><input type="radio" name="a" value="male">Male
                         <input type="radio" name="a" value="female">Female</td></tr>
<tr><td >Email:-</td></tr><tr><td><input type="email" name="email" placeholder="Email" required="true" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr ><td >Password:-</span></td></tr><tr><td><input type="password" name="password" placeholder="Password" required="true" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;margin-top:10px;  box-shadow:2px 2px 5px black; "></td></tr>
</table>
</div>

<table style="margin-left:350px;">


<tr><td >Age:-</td></tr><tr><td><input type="number" name="age" placeholder="Age" required="true" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr><td >City:-</td></tr><tr><td><input type="text" name="city" placeholder="Password" required="true" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr><td >Pincode:-</td></tr><tr><td><input type="number" name="pincode" placeholder="Pincode" required="true" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr><td >Address:-</td></tr><tr><td><input type="textarea" name="address" placeholder="Address" required="true" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>
<tr><td >Contact:-</td></tr><tr><td><input type="number" name="contact" placeholder="Mobile Number"required="true" style="height:31px;width:260px; outline:none;border-radius:10px;border:none;  box-shadow:2px 2px 5px black; "></td></tr>

</table>
	
<tr><td><input type="submit"  value="Registration" style="margin-top:50px; margin-left:-40px; height:40px;width:150px;background-color:; border:none; border-radius:15px; outline:none; box-shadow:2px 2px 5px black;background-color:#42d1d0;font-size:20px;color:white;"></td></tr>
</form>
 <h4 style="margin-left:250px; margin-top:30px; margin-bottom:30px;">Already Register?<a href="login.php">Then click here</a><h4>


</center>
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