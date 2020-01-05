<?php
include("connect.php");
session_start();
$aid=$_REQUEST['aid'];
$query="select status from tbl_appointment where appid='$aid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH		))
{
	$s=$row['status'];
}
if($s=='y')
{
	$query2="update tbl_appointment set status='n' appid='$aid'";
	mysql_query($query2);
	header("location:dcancle.php");
	
}

if($s=='n')
{
	$query2="update tbl_appointment set status='y' appid='$aid'";
	mysql_query($query2);
	header("location:dcancle.php");
	
}

?>