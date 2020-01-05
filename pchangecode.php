<?php

session_start();
include("connect.php");
$op=$_POST['op'];
// $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cp'];
$email=$_SESSION['patient'];
//echo $email;
$query="select password from tbl_patient where email='$email'";
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
		header("location:pchange.php");
	}
	else if($np==$cnp)
	{
		//echo"change hoga";
		$query2="update tbl_patient set password='$cnp' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("location:login.php?msg=4");
	}
	else
	{
		//echo"no change";
		header("location:pchange.php");
	}
	
}
else
{
	//echo "change nhi hoga";
		header("location:pchange.php");
}



?>