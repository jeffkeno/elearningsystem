<?php
$name = $_POST['name'];
$code = $_POST['code'];


mysql_connect("127.0.0.1", "root", "");
mysql_select_db("capstone");
$result = "SELECT * FROM lesson_code WHERE code='$code' AND code='$code'";
			$result = mysql_query($result)or die(mysql_error());
			$row = mysql_fetch_array($result);
if($row['name'] == $name && $row['code'] ==$code)
{
	echo "Loggin Successfully!".$row['name'];
}
else
{
	echo "failed to login";
}
		
?>