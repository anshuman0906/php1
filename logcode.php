<?php
session_start();
include("connect.php");
$who=$_POST['who'];
echo $who;
$email=$_POST['email'];
$password=$_POST['password'];
if($who=="Doctor Login")
{
	$query="select * from tbl_doctor where email='$email'and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['doctor']=$email;
			
		header("location:dzone.php");
	}
	else
	{
		header("location:login.php");
	}
}
if($who=="Patient Login")
	
	{
	$query="select * from tbl_patient where email='$email'and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['patient']=$email;
		header("location:pzone.php");
	}
	else
	{
		header("location:login.php");
	}
}
?>