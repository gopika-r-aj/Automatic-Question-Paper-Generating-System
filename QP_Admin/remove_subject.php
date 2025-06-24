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
        Remove Subject
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
			   <form id="myForm" method="POST" action="db_function.php" >
            <div class="box-header">
              <h3 class="box-title">Subject  Details</h3>
			
            </div>
            <!-- /.box-header -->
			 
            <div class="box-body">
				
				
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Subject Name</th>
                  <th>Department Name</th>
                  <th>Semester</th>
                  <!--<th>Phone NO.</th>-->
                  <th>Delete</th>
                 
                </tr>
                </thead>
                <tbody>					
					<?php
					
						$teacher=$obj->getAll('SELECT a.*,b.* FROM department a,subject b where a.dept_id=b.dept_id ');
						foreach($teacher as $value)
						{
							//href='#db_function.php?d_teacher=$reg_id' <input name='id' type='hidden' value='$reg_id'>
							extract($value);
							echo "<tr>
							  <td>$subject_name</td>
							  <td>$dept_name</td>
							  <td>$semester</td>
							 
							  <td>
							 <a class='delete' href='db_function.php?d_sub=$sub_id'>
							  	
							  	<button type='button' id='button' name='verify' class='btn btn-success'>Delete</button>
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
			  </form>
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
  text: "Successfull Deleted",
  icon: "success",
  button: "OK",
});
	}

</script>

<script>
function myFunction() {
  return confirm("Are Sure Want U Delete!");
}
</script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>

<?php if(isset($_GET["success"])){
$obj->sweetalert('success',' Successfully Deleted','remove_subject.php');}


if(isset($_GET["OK"])){
$obj->sweetalert('success','you have successfully Deleted Profile','remove_subject.php');}


if(isset($_GET["pay?"])){
$obj->sweetalert('error','The given Teacher Access is Blocked','remove_subject.php');}


if(isset($_GET["cancel"])){
$obj->sweetalert('error','you have successfully cancelled booking','remove_subject.php');}
?>






<?php
	include 'footer.php';
?>
