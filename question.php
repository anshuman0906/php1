<?php
session_start();
include("connect.php");
$ques=$_POST['ques'];
$email=$_SESSION['patient'];
//echo $email;
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$ptid=$row['ptid'];
	//echo $ptid;
}
$query2="insert into tbl_question(ptid,question,date) values('$ptid','$ques',curdate())";
mysql_query($query2);
header("location:discuss.php");
?>