<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
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
					   
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
							
									<?php
								include("database.php");
								echo "<h2 class=head1> Select Subject to Give Quiz </h2>";
								$sql=mysql_query("select * from subject");
								echo "<table align=center cellpadding=1>";
								while($row=mysql_fetch_row($sql))
								{	
									echo "<tr><td align=center ><a href=show_test.php?subid=$row[0]><font size=4>$row[1]</font></a>";
								}
									echo "</table>";
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