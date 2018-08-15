<?php
include ('dbcon.php');
$id = $_GET['content_id'];
$ope = $_GET['ope'];
$rs = "UPDATE content set status=$open where content_id=$id";

	mysql_query($rs,$content_query);
	header("location:content.php");
?>