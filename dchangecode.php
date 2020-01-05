<?php
session_start();
include("connect.php");
$op=$_POST['op'];
// $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cp'];
$email=$_SESSION['doctor'];
//echo $email;
$query="select password from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];

	
}
	
if($pp==$op)
{
	if($op==$np)
	{
		//echo "no change";
		header("location:dchange.php");
	}
	else if($np==$cnp)
	{
		//echo"change hoga";
		$query2="update tbl_doctor set password='$cnp' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("location:login.php?msg=4");
	}
	else
	{
		//echo"no change";
		header("location:dchange.php");
	}
	
}
else
{
	//echo "change nhi hoga";
		header("location:dchange.php");
}



?>