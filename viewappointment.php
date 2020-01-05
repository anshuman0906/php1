<?php
session_start();
include("connect.php");
$email=$_SESSION['doctor'];
$query="select * from tbl_appointment where email='$email'";
$res=mysql_query('$query');

?>