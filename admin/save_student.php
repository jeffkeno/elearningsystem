<?php
include('dbcon.php');
        
               $un = $_POST['un'];
			   $pass = $_POST['pass'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $class_id = $_POST['class_id'];

               mysql_query("insert into student (username,password,firstname,lastname,location,class_id,status)
		values ('$un','$pass','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Unregistered')                                    
		") or die(mysql_error()); ?>
<?php    ?>