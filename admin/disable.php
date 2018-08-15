<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update content set Access ='Disable'  where content_id = '$get_id'");
header('location:content.php');
?>