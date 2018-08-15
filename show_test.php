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
<body>
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
									extract($_GET);
									$rs1=mysql_query("select * from subject  where sub_id=$subid ");
									$row1=mysql_fetch_array($rs1);
									echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
									$sql=mysql_query("select * from test where sub_id=$subid ORDER BY test_name;");
									if(mysql_num_rows($sql)<1)
									{
										echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
										exit;
									}
										echo "<h2 class=head1> Select Quiz Name to Give Quiz </h2>";
										echo "<table align=center>";

									while($row=mysql_fetch_row($sql))
									{
										echo "<tr><td align=center ><a href=start_quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
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