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
                                <div class="muted pull-left">Score board / </div>
                                <div class="muted pull-left"> My Score</div>
                                <div id="" class="muted pull-right"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
							
									<?php
									
include("database.php");
$sql=mysql_query("SELECT test.test_name, result.score, test.total_que,  result.id FROM test INNER JOIN result ON test.test_id=result.test_id WHERE test.test_id=result.test_id and result.id='$session_id'",$cn) or die(mysql_error());

echo "<h1 class=head1> Result </h1>";
if(mysql_num_rows($sql)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><th width=200>Test Name <th width=30> Score <th width=30> Total Question <th width=30> My session ID";
while($row=mysql_fetch_row($sql))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[2] <td align=center> $row[3]";
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