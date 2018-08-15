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
</style>
    <body id="class_div">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid
					 
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<li><a href="#"><b>My Class</b></a><span class="divider"></span></li>
						</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
								 <a href="add_content.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Content</a>
                    
									<div id="count_class" class="muted pull-right"></div>
								</div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								<form action="delete_content.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#content_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>									
									<thead>
										        <tr>

											     <th></th>
												 <th>Title</th>
												 <th></th>
                                   
												</tr>
												
										</thead>
										<tbody>
											
             		<?php
					$content_query = mysql_query("select * from content")or die(mysql_error());
					while($row = mysql_fetch_array($content_query)){
					$id = $row['content_id'];
	
					?>
                              
										<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                         <td><?php echo $row['title']; ?></td>
                                         <td width="30"><a href="edit_content.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>
                                     
                               
                                </tr>
                         <?php } ?>
						   
                              
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
									
                </div>
				<!--right-->
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>