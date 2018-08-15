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
.content input {
    width: 100%;
}
</style>
    <body id="class_div">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
				
							<!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add Content</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="content.php" class="btn btn-default"><i class="icon-arrow-left"></i> Back</a>
									
									   
									   <form class="form-horizontal" method="POST">
										<div class="control-group">
										<label class="control-label" for="inputEmail">Title</label>
										<div class="controls">
										<input type="text" name="title" id="inputEmail" placeholder="Title">
										</div>
										</div>
										
												<div class="control-group">
										<label class="control-label" for="inputPassword" class="form-control" >Content</label>
										<div class="controls">
												<textarea name="content" class="content" id="ckeditor_full" rows="20">
										
												</textarea>
										</div>
										</div>
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Save</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['save'])){
										$title = $_POST['title'];
										$content = $_POST['content'];
										$access = $_POST['Access'];
										mysql_query("insert into content (title,content,access) value('$title','$content', 'Unable')")or die(mysql_error());
										?>
										<script>
										window.location = 'lessons.php';
										</script>
										<?php
										}
										?>
									
								
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