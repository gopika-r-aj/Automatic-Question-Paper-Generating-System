<?php 
	include 'head-section.php';
	include 'top-bar.php';
	include 'side-menu.php';
?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teacher Verification 
        <small></small>
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
       
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Teacher Details</h3>
			
            </div>
            <!-- /.box-header -->
			 
            <div class="box-body">
				<?php
					if(isset($_GET['success'])){
					?>
								<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Successfull!</h4>
                Successfully  approved. Message sent to Teacher.
              </div>
				<?PHP
					}
				?>
				
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Teacher Name</th>
                  <th>Collge Name</th>
                  <th>Department Name</th>
                  <th>Phone NO.</th>
                  <th>Verify</th>
                 
                </tr>
                </thead>
                <tbody>					
					<?php
					
						$teacher=$obj->getAll('SELECT a.*,b.*,c.* FROM log_admin a,reg_teacher b,department c where a.log_id=b.reg_id and b.dept=c.dept_id and a.status=1');
						foreach($teacher as $value)
						{
							//href='#db_function.php?d_teacher=$reg_id' <input name='id' type='hidden' value='$reg_id'>
							extract($value);
							echo "<tr>
							  <td>$fname</td>
							  <td>$cname</td>
							  <td>$dept_name</td>
							  <td>$phno</td>
							  <td>
							  <a data-id='$reg_id' href='db_function.php?u_status=$log_id'>
							  	
							  	<button type='button' id='button' name='verify' onClick='sucess()' class='btn btn-success'>Verification</button>
							  </a>
							  </td>
							 
							</tr>";			
						}
					
					
					//data-id="{{$user->id}}"
					?>
                </tbody>
               <!--- <tfoot>
                <tr>
<button type='button' class='btn btn-success'>Edit</button>
                  <th>Teacher Name</th>
                  <th>Department Name</th>
                  <th>Subject</th>
                  <th>Phone NO.</th>
                  <th>Delete</th>
                </tr>
                </tfoot>-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
	function sucess()
	{
	swal({
  title: "Success",
  text: "Verification Successfull",
  icon: "success",
  button: "OK",
});
	}

</script>




<?php
	include 'footer.php';
?>
