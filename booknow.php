<?php
session_start();
include("connect.php");
$did=$_POST['did'];
//echo $did;


$doa=$_POST['date'];
//echo $doa;

$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['ptid'];
	
	
}
$query2="insert into tbl_appointment(docid,ptid,status,doa,date) values('$did','$pid','y','$doa',curdate())";
mysql_query($query2);
header("location:pzone.php");
?>