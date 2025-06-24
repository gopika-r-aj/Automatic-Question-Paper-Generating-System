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
        Change Password
      </h1>
      <!---<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
       <form action="db_function.php" method="post">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

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
                  <label>Current Password</label>
                  <input type="password" class="form-control" required="required"  name="pass" placeholder="Current Password">
                </div>
				<div class="form-group">
                  <label>New Password</label>
                  <input type="password" class="form-control" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" required="required"  name="new_pass1" placeholder="New Password">
                </div>
				<div class="form-group">
                  <label>Re_Enter New Password</label>
                  <input type="password" class="form-control" required="required"   required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case"name="new_pass2" placeholder="Re_Enter New Password">
                </div>
            </div>
			  <div class="col-md-6">
				 
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
                <button type="submit" name="re_pass" class="btn btn-info pull-right">Change</button>
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

