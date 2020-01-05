<?php
session_start();
$e=$_POST['email'];
$p=$_POST['pass'];
include("connect.php");

$query="select * from tbl_admin where email='$e' and password='$p'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['admin']=$e;
	header("location:home.php");
}
else
{
	header("location:index.php");
}
?>