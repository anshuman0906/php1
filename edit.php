<?php
$id=$_POST['id'];
$n=$_POST['n'];
$f=$_POST['f'];
$g=$_POST['a'];
$fee=$_POST['fee'];
$time=$_POST['time'];
$area=$_POST['area'];
$mo=$_POST['mo'];
include("connect.php");
$query="update tbl_doctor set doctor='$n',fname='$f',gender='$g',fees='$fee', 
time='$time',address='$area',mobile='$mo' where docid='$id'";
mysql_query($query);
header("location:show1.php");
?>