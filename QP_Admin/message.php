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
       Message for Teachers
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  
<div class="col-md-12">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!--<div class="form-group">
                <input class="form-control" placeholder="To:">
              </div>-->
				<!--<div class="form-group">
                <label>Slect Category </label>
                <select class="form-control select2 select2-hidden-accessible" name="subject" style="width: 25%;"  tabindex="-1" aria-hidden="true">
					<option value="examiner">Examiner</option>
					<option value="teacher">Teacher</option>
					<option value="both">Teacher And Teacher</option>
					</select>
				</div>-->
				
              <div class="form-group">
                <input class="form-control" placeholder="Subject:">
              </div>
				<div class="form-group">
                  <label>Compose Message</label>
                  <textarea class="form-control" rows="10" placeholder="Enter Message Here"></textarea>
                </div>
       				
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
          </div>
</div>
</div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
	include 'footer.php';
?>