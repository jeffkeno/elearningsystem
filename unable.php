<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update lesson_code set code = '$get_id'");
header('location:student_lessons.php');
?>