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
          <h3 class="box-title">Change Password</h3>

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
                  <input type="password" class="form-control" required="required" placeholder="Current Password">
                </div>
					<div class="form-group">
                  <label>New Password</label>
                  <input type="password" class="form-control" name="password" id="pass" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="New Password">
                </div>
				
             
            </div>
            <!-- /.col -->
            <div class="col-md-6">
			<br><br><br><br>
              <div class="form-group">
                  <label>Re_enter New Password</label>
                  <input type="password"  name="re_password" id="re_pass"  required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case"   class="form-control" placeholder="Re_enter new password">
                </div>
            
            </div>
            <!-- /.col -->
			  
          </div>
          <!-- /.row -->
			
        <!-- /.box-body -->
        <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="ch_pass" class="btn btn-info pull-right">GO</button>
              </div>
      </div>
      </div>
		  
      <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	  <script>
function getdistrict(val) {
$.ajax({
type: "POST",
url: "get_subject.php",
data:'dept_id='+val,
//success: function(data){
//$("#district-list").html(data);
//}
});
}
</script>
<?php
	include 'footer.php';
?>

