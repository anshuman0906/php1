<?php
session_start();
include("connect.php");
$feed=$_POST['a'];
//echo $feed;
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$ptid=$row['ptid'];
}
$query2="insert into tbl_feedback(feedback,ptid,date) values('$feed','$ptid',curdate())";
mysql_query($query2);
header("location:pzone.php");



?>