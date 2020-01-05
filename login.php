  <?php 	


?>
<html>
<head>
<link href="css\login.css" rel="stylesheet"  type="text/css">
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
<div id="login" style="background-image:url('images/e.jpg');">
<div id="logo2"  style=" background-image:url('images/logo.png');"></div>

<div id="input">
<form action="logcode.php" method="post">
<h1 style="color:white;">LOGIN</H1>
<hr/>
<select name="who" ><option>Login As</option><option>Doctor Login</option><option>Patient Login</option></select>
<table>
<tr><td><span style="color:white; font-size:20px; font-family:lato;">User ID:-</span></td></tr><tr><td><input type="email" name="email" placeholder="email@.com" required="true" /></td></tr>
<tr><td><span style="color:white; font-size:20px; font-family:lato;">Password:-</span></td></tr><tr><td><input type="Password" name="password" placeholder="Password" required="true" /></td></tr>
</table>
<span style="box-shadow:2px 5px 5px 5px black;border-radius:15px;"><input type="submit" value="Login" style="background-color:#42d1d0;color:white;font-size:20px;margin-top:10px;font-family:lato;"/></span></form> 
<div id="as" style="height:autopx; width:autopx;" >
<h4 style="float:left; margin-top:-10px;"><a href="#">Forget Password</a></h4>
<h4 style="float:right;margin-right:30px;margin-top:-10px; color:white;">New Register</h4><br/>
<h4 style="float:right;margin-right:-170px;margin-top:20px;"><a href="doctor.php">click for Doctor</a></h4><BR/>
<h4 style="float:right;margin-right:50px;margin-top:0px;"><a href="patient.php">click for patient</a></h4>
</div>


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