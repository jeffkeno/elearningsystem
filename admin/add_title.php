   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">

                            </div>
                            <div class="block-content collapse in">
							                                <div class="muted pull-left"><a href="quiz.php" class="btn btn-default">Add Subject Title</a></div>
                                <div class="span12">
		
<?php 
require_once 'database.php';

if($_POST) {
	$subname = $_POST['sub_name'];
	
	$sql = "INSERT INTO subject (sub_name) VALUES ('$subname')";
	if($connect->query($sql) === TRUE) {
		echo "<div class=\"alert alert-success\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
Successfully added $subname.
</div>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}
$pasa="";

?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>

<form name="form1" method="post" onSubmit="return check();">
  <table width="41%"  border="0" align="center">
    <tr>
       <center> <input name="sub_name" placeholder="Enter language name" type="text" id="sub_name" autocomplete="off"></center>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="pasa" value="submit" class="btn btn-default" ></td>
    </tr>
  </table>
</form>

								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>