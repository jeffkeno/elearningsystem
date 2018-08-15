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
                <div class="span6" id="content">
                     <div class="row-fluid">

					     <ul class="breadcrumb">
								<li><a href="#"><b>My Class</b></a><span class="divider"></span></li>
						</ul>
		
             
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="count_class" class="muted pull-right"></div>
								</div>
                            <div class="block-content collapse in">
                                <div class="span12">
							<?php include('teachers_students.php'); ?>
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