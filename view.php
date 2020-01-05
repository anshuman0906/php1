<?php
$qid=$_REQUEST['qid'];
include("connect.php");
$query="select * from tbl_answer where qid='$qid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	echo $row['answer'];
echo "<br/>";
}
?>