<?php
include("connect.php");
$id=$_POST['id']; echo $id;
$name=$_POST['name']; echo $name;
$fname=$_POST['fname']; echo $fname;
$gender=$_POST['a']; echo $gender;

$city=$_POST['city']; echo $city;
$age=$_POST['timing']; echo $age;
$pin=$_POST['spec']; echo $pin;

$mobile=$_POST['mobile']; echo $mobile;
$address=$_POST['add'];  echo $address;

$query="update tbl_patient set name='$name',fname='$fname',gender='$gender',contact='$mobile',address='$address',pincode='$pin',age='$age',city='$city'where ptid='$id'";
mysql_query($query);
header("Location:pzone.php");

?>