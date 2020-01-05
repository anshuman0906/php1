<?php
$n=$_POST['name'];
$e=$_POST['email'];
$m=$_POST['mobile'];
$msg=$_POST['a'];
echo $msg;
mysql_connect("localhost","root","");
mysql_select_db("medicounsel");
$query="insert into tbl_contact(name,email,mobile,address,date) values('$n','$e','$m','$msg',now())";
mysql_query($query);
header("location:contact.php");

?>
<script>window.alert("thanks for your msg admin will reply soon");</script>