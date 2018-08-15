<?php
		include('dbcon.php');
		session_start();
		$code = $_POST['code'];
		/* student */
			$query = "SELECT * FROM lesson_code WHERE  code='$code'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
		/* teacher */
	
		if( $num_row > 0 ) { 
		$_POST['code']=$row['code'];
		echo 'true_student';	
		}
		echo 'true';
		
		 }else{ 
				echo 'false';
		}	
				
		?>