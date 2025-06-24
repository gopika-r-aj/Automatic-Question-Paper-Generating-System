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
        Add Questions
      </h1>
      <ol class="breadcrumb">
        <!--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="db_function.php" method="post">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Input Question to Question Bank</h3>
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
                   <label>Subject Name  </label>
                	<select name="sub_id" required="required" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">					
						<option value="">Subject Name</option>
						<?php
						@session_start();
	                   $tid=$_SESSION['dept'];
							$doctor=$obj->getAll('SELECT * FROM `subject` WHERE `dept_id`='.$tid);
							foreach($doctor as $key=>$value)
							{
							  extract($value);
							  echo"<option value='$sub_id'>$subject_name</option>";
								
							}
						?>
					</select>
                </div>
				<div class="form-group">
                  <label>Enter Question</label>
                  <input type="text" required="required" class="form-control" name="question" placeholder="Enter Question">
                </div>
				<div class="form-group">
                   <label>Question Complexity  </label>
                	<select name="question_complex" required="required" class="form-control select2 select2-hidden-accessible" style="width: 25%;" tabindex="-1" aria-hidden="true">					
						<option value="easy">Easy</option>
						<option value="medium">Medium</option>
						<option value="hard">Hard</option>
					</select>
                </div>
				<div class="form-group">
                   <label>Question Type  </label>
                	<select name="question_type" required="required" class="form-control select2 select2-hidden-accessible" style="width: 25%;" tabindex="-1" aria-hidden="true">					
						<option value="2"> 2 Marks</option>
						<option value="5"> 5 Marks</option>
						<option value="15"> 15 Marks </option>
					</select>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
				
              <!--<div class="form-group">
                  <label>Department ID</label>
                  <input type="password" class="form-control" name="dept_id" placeholder="Department id">
                </div>-->
				<div class="form-group">
                   <label>Select Module </label>
                	<select name="module" required="required" class="form-control select2 select2-hidden-accessible" style="width: 25%;" tabindex="-1" aria-hidden="true">					
						<option value="1"> 1 Module</option>
						<option value="2"> 2 Module</option>
						<option value="3"> 3 Module</option>
						<option value="4"> 4 Module </option>
						<option value="5"> 5 Module </option>
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

                <button type="submit" name="add_ques" class="btn btn-info pull-right">GO</button>
              </div>
      </div>
      <!-- /.box -->
      <!-- /.row -->
		</form>
    </section>
	  
	  
	 <section class="content">
      <div class="row">
        <div class="col-xs-12">
       
          <div class="box">
            
            <div class="box-body">
				
				
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Question </th>
                  <th>Question Complexity</th>
                  <th>Question Type</th>
                  <th>Subject</th>
                  <th>module</th>
                  <th>Department</th>
                  <th>Delete</th>
                 
                </tr>
                </thead>
                <tbody>					
					<?php
					
						$teacher=$obj->getAll('SELECT a.*,b.* FROM question a, subject b WHERE a.sub_id = b.sub_id');
						foreach($teacher as $value)
						{
							//href='#db_function.php?d_teacher=$reg_id' <input name='id' type='hidden' value='$reg_id'>
							extract($value);
							echo "<tr>
							  <td>$question</td>
							  <td>$question_complex</td>
							  <td>$question_type mark</td>
							  <td>$subject_name</td>
							  <td>$module Module</td>
							  <td>$dept</td>
							 
							  <td>
							  
							  	
							  	<button type='button' id='button' name='verify' onClick='sucess()' class='btn btn-success'>Delete</button>
							  </a>
							  </td>
							 
							</tr>";			
						}
					
					
					//data-id="{{$user->id}}" <a data-id='$reg_id' href='db_function.php?u_status=$log_id'>
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
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->
<script>
	function sucess()
	{
	swal({
  title: "Success",
  text: "Successfull Deleted",
  icon: "success",
  button: "OK",
});
	}

</script>
<?php
	include 'footer.php';
?>

