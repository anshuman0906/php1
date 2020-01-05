<?php
include("connect.php");
 $dn=$_POST['doctor'];
 $fn=$_POST['fname'];
 $g=$_POST['a'];
 $em=$_POST['email'];
 $pass=$_POST['password'];
 $fe=$_POST['fees'];
 $ti=$_POST['timing'];
 $s=$_POST['b'];

 $ad=$_POST['address'];
 $c=$_POST['contact'];
// echo $c;
 $pic=$_FILES['pic']['name'];
 $type=$_FILES['pic']['type'];
 $size=$_FILES['pic']['size'];
 $tmp_name=$_FILES['pic']['tmp_name'];
$location="doctor/";
$query="insert into tbl_doctor(name,fname,gender,email,password,fees,timing,speciality,address,contact,picture,date)
 values('$dn','$fn','$g','$em','$pass','$fe','$ti','$s','$ad','$c','$pic',now())";
 move_uploaded_file($tmp_name,$location.$pic);
 mysql_query($query);
 
?>