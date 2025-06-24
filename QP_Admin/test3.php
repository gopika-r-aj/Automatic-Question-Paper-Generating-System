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
       Genereate Question Paper for Examination
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Input Question Paper Details</h3>

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
                  <label>College Name</label>
                  <input type="text" class="form-control" placeholder="Name of College">
                </div>
					<div class="form-group">
                  <label>Name of Examination</label>
                  <input type="text" class="form-control" placeholder="Name of Examination with Month and Year">
                </div>
				<div class="form-group">
                <label>Course Name </label>
              <select name="dept_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">					
						<?php
				  
							$doctor=$obj->getAll('SELECT * FROM `department`');
							foreach($doctor as $key=>$value)
							{
							  extract($value);
							  echo"<option value='$dept_name'>$dept_name</option>";
							}
						?>
					</select>
              </div>
						<div class="form-group">
                <label>Name of Subject </label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"  tabindex="-1" aria-hidden="true">					
                      	<?php
							
							$ok=$obj->getAll('SELECT * FROM `subject` WHERE `dept_id`='.$dept_id);
							foreach($ok as $key=>$sub)
							{
							  extract($sub);
							  echo"<option value='$subject_name'>$subject_name</option>";
							}
							
						?>
                </select>
				</div>
             
            </div>
            <!-- /.col -->
            <div class="col-md-6">
			<br><br><br><br><br><br><br><br><br><br><br>
              <div class="form-group">
                  <label>Course Code</label>
                  <input type="text" class="form-control" placeholder="Name of College">
                </div>
            
            </div>
            <!-- /.col -->
			  
          </div>
          <!-- /.row -->
			<div class="row">
				<div class="col-xs-3">
				<div class="form-group">
                <label>Number of Questions in Part A </label>
                <select class="form-control select2" style="width: 50%;">
                  <option selected="selected">--</option>
                  <option>12</option>
                  <option>11 </option>
                  <option>10</option>
                  <option>09</option>
                  <option>08</option>
                  <option>07</option>
                  <option>06</option>
                  <option>05</option>
                  <option>04</option>
                  <option>03</option>
                  <option>02</option>
                  <option>01</option>
                </select>
				</div>
				</div>
				<div class="col-xs-3">
				<div class="form-group">
                <label>Number of Questions in Part B</label>
                <select class="form-control select2" style="width: 50%;">
                  <option selected="selected">--</option>
                  <option>09</option>
                  <option>08</option>
                  <option>07</option>
                  <option>06</option>
                  <option>05</option>
                  <option>04</option>
                  <option>03</option>
                  <option>02</option>
                  <option>01</option>
                </select>
				</div>
				</div>
				<div class="col-xs-3">
				<div class="form-group">
                <label>Number of Questions in Part C </label>
                <select class="form-control select2" style="width: 50%;">
                  <option selected="selected">--</option>
                  <option>04</option>
                  <option>03</option>
                  <option>02</option>
                  <option>01</option>
                </select>
				</div>
				</div>
			</div>
			<div class="row">
			<div class="col-xs-3">
				<label>Time Duration of Examination</label>
                  <input type="text" class="form-control" placeholder=>
                </div>
			&nbsp;
			<div class="col-xs-3">
				<label>Total Mark of Examination</label>
                  <input type="text" class="form-control" placeholder=>
                </div>
			<div class="col-xs-3">
				<label>Question Paper Code</label>
                  <input type="text" class="form-control" placeholder=>
                </div>
			
        </div>
		  &nbsp;&nbsp;&nbsp;<label>Module for Examination</label>
		  <div class="checkbox">
                    <label>
                     &nbsp;&nbsp;&nbsp; <input type="checkbox">
                      Module No.1
                    </label>
			    <label>
                     &nbsp;&nbsp;&nbsp; <input type="checkbox">
                      Module No.2
                    </label>
			    <label>
                     &nbsp;&nbsp;&nbsp; <input type="checkbox">
                      Module No.3
                    </label>
			    <label>
                     &nbsp;&nbsp;&nbsp; <input type="checkbox">
                      Module No.4
                    </label>
			    <label>
                     &nbsp;&nbsp;&nbsp; <input type="checkbox">
                      Module No.5
                    </label>
                  </div>
		   <div class="col-xs-2">
		 
		  </div>
        <!-- /.box-body -->
        <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">GO</button>
              </div>
      </div>
      <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
	include 'footer.php';
?>

