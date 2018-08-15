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
    <body id="class_div">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">

					 
             
                        <div class="block">
								<div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;">Student Records</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
										
							<!--<?php
									
include("database.php");
$sql=mysql_query("SELECT student.firstname, student.lastname, student.status,student.student_id FROM student  WHERE status='Registered' ORDER BY lastname;",$cn) or die(mysql_error());

echo "<table border=1 align=center><tr class=style2><th width=200 style='color:red;'> First name <th width=200 style='color:red;'> Last name <th width=30 style='color:red;'> Status <th width=30 style='color:red;'> Student session ID";
while($row=mysql_fetch_row($sql))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[2] <td align=center> $row[3]";
}
echo "</table>";
?>

							<?php
									
include("database.php");
$sql=mysql_query("SELECT student.firstname, student.lastname, student.status,student.student_id FROM student  WHERE status='Unregistered' ORDER BY lastname;",$cn) or die(mysql_error());

echo "<table border=1 align=center><tr class=style2><th width=200 style='color:green;'> First name <th width=200 style='color:green;'> Last name <th width=30 style='color:green;'> Status <th width=30 style='color:green;'> Student session ID";
while($row=mysql_fetch_row($sql))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[2] <td align=center> $row[3]";
}
echo "</table>";
?>-->
                                </div>
                            </div>
                        </div>
          
                    </div>

                </div>
				<!--right-->
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>