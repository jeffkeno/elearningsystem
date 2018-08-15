   <div class="row-fluid">
       <a href="students.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Student</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Student</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysql_query("select * from student LEFT JOIN class ON class.class_id = student.class_id where student_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
										 <div class="controls">
										 <label>Class</label>
                                            <select  name="class_id" class="" placeholder="" required>
                                             	<option></option>
											<?php
											$cys_query = mysql_query("select * from class order by class_name");
											while($cys_row = mysql_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                      
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" value="<?php echo $row['username']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Username" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="pass"  value="<?php echo $row['password']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Password" required>
                                          </div>
                                        </div>
										
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn"  value="<?php echo $row['firstname']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln"  value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $un = $_POST['un'];
                                $fn = $_POST['fn'];
								$pass = $_POST['pass'];
                                $ln = $_POST['ln'];
                                $cys = $_POST['class_id'];
                      

								mysql_query("update student set username = '$un', password = '$pass', firstname ='$fn' , lastname = '$ln' , class_id = '$cys' where student_id = '$get_id' ")or die(mysql_error());

								?>
 
								<script>
								window.location = "students.php"; 
								</script>

                       <?php     }  ?>
	