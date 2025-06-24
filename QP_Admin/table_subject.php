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
       Subject Name 
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Question</th>
                  <th>Complexity</th>
                  <th>Type</th>
                  <th>Phone NO.</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>					
					<?php 
						$teacher=$obj->getAll('SELECT * FROM `reg_teacher` WHERE 1');
						foreach($teacher as $value)
						{
							extract($value);
							echo "<tr>
							  <td>$fname</td>
							  <td>$dept</td>
							  <td>$email</td>
							  <td></td>
							  <td>
							  	<button type='button' class='btn btn-success'>Edit</button>
								<button type='button' class='btn btn-danger'>Delete</button>
							  </td>
							</tr>";			
						}
					?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Teacher Name</th>
                  <th>Department Name</th>
                  <th>Subject</th>
                  <th>Phone NO.</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
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
<?php
	include 'footer.php';
?>
