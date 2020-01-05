<?php
include("connect.php");
 $pn=$_POST['patient'];
 $fn=$_POST['fname'];
 $g=$_POST['a'];
 $em=$_POST['email'];
 $pass=$_POST['password'];
 $ag=$_POST['age'];
 $pin=$_POST['pincode'];
 $ad=$_POST['address'];
 $c=$_POST['contact'];
 $ci=$_POST['city'];

$query="insert into tbl_patient(name,fname,gender,email,password,pincode,age,address,contact,city,date) 	values('$pn','$fn','$g','$em','$pass','$ag','$pin','$ad','$c','$ci',now())";
 mysql_query($query);
 
?>