<?php 
	include 'head-section.php';
	include 'top-bar.php';
	include 'side-menu.php';
	?>
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Department
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="db_function.php" method="post">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Input Department Details</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
		
          <div class="row">
            <div class="col-md-6">
				<div class="form-group">
                  <label>New Department Name</label>
                  <input type="text" required="required" class="form-control" name="dept_name" placeholder="Name of Depatment">
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!--<div class="form-group">
                  <label>Department ID</label>
                  <input type="password" class="form-control" name="dept_id" placeholder="Department id">
                </div>-->
            
            </div>
            <!-- /.col -->
			  
          </div>
          <!-- /.row -->
			
        </div>

		  
		   <div class="col-xs-2">
		 
		  </div>
        <!-- /.box-body -->
        <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="add_dep" class="btn btn-info pull-right">GO</button>
              </div>
      </div>
      <!-- /.box -->
      <!-- /.row -->
		</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
	include 'footer.php';
?>

