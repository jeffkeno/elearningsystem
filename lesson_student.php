<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<body class="student-body">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					   
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
									$code = $_POST['code'];
									

									mysql_connect("127.0.0.1", "root", "");
									mysql_select_db("capstone");
									$result = "SELECT * FROM lesson_code WHERE code='$code'";
												$result = mysql_query($result)or die(mysql_error());
												$row = mysql_fetch_array($result);
									if($row['code'] == $code)
									{
										echo "Loggin Successfully!".$row['code'];
									}
									else
									{
										echo "failed to login";
									}
									
									
								?>
								


                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>