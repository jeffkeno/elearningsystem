<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<style>
body { 
	background: url("tabo/teacher.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
	-webkit-background-size: cover !important; 
	-moz-background-size: cover !important; 
	-o-background-size: cover !important; 
	background-size: cover !important; 
	background-color:#8CCDC2;
}

table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
	color:black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>
    <body class="student-body">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
									
					   
					 
				
					 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
									
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
  										
						
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