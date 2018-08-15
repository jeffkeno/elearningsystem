<?php  include('header.php'); ?>
<?php  include('session.php'); ?>

<style>

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
    <body class="admin-body">
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_calendar.php'); ?>
                
                <!--/span-->
                <div class="span9" id="content">
								        <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
										<div class="span8">
							<!-- block -->
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">Calendar</div>
										</div>

										<?php include('score_board_query.php'); ?>
										
										</div>
										
										<div class="span4">
											
										<?php include('admin_students.php'); ?>
										</div>	
							<!-- block -->
						
										</div>
                                </div>		
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
	<?php include('admin_calendar_script.php'); ?>
    </body>

</html>