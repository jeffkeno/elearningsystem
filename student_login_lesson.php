<?php
		include('admin/dbcon.php');
		session_start();

		$code = $_POST['code'];
		/* student */
			$query = "SELECT * FROM lesson_code INNER JOIN student ON lesson_code.student_id=student.student_id WHERE student_id = '$student_id' AND code = '$code'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
		/* teacher */
		$query_teacher = mysql_query("SELECT * FROM teacher WHERE username='$username' AND password='$password'")or die(mysql_error());
		$num_row_teacher = mysql_num_rows($query_teacher);
		$row_teahcer = mysql_fetch_array($query_teacher);
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['student_id'];
		echo 'true_student';	
		}else if ($num_row_teacher > 0){
		$_SESSION['id']=$row_teahcer['teacher_id'];
		echo 'true';
		
		 }else{ 
				echo 'false';
		}	
				
		?>