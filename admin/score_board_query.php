   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">

                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

								
						<?php									
include("..\database.php");
$sql=mysql_query("SELECT test.test_name, result.score, test.total_que,  result.id FROM test INNER JOIN result ON test.test_id=result.test_id ",$cn) or die(mysql_error());

echo "<table border=1 align=center><tr class=style2><th width=200>Test Name <th width=30> Score <th width=30> Total Question <th width=30> Students session ID";
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