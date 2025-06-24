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
        Add Subject
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
          <h3 class="box-title">Add Subject for Existing Department</h3>

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
                <label>Department Name  </label>
                	<select name="dept_id" required="required" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">					
						<?php
							$doctor=$obj->getAll('SELECT * FROM `department`');
							foreach($doctor as $key=>$value)
							{
							  extract($value);
							  echo"<option value='$dept_id'>$dept_name</option>";
							}
						?>
					</select>
              </div>
				<div class="form-group">
                  <label>New Subject Name</label>
                  <input type="text" class="form-control" required="required"  name="subject_name" placeholder="Name of Subject">
                </div>
				<div class="form-group">
                  <label>Course Code</label>
                  <input type="text" class="form-control" required="required"  name="course_code" placeholder="Course Code">
                </div>
            </div>
			  <div class="col-md-6">
				  <div class="form-group">
                  <label>Semester</label>
                  <select required="required" name="semester" class="form-control select2 select2-hidden-accessible" style="width: 15%;" tabindex="-1" aria-hidden="true">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  </select>
                </div>
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
                <button type="submit" name="add_sub" class="btn btn-info pull-right">GO</button>
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

