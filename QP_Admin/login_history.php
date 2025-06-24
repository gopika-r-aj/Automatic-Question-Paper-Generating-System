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
        Login History 
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
              <h3 class="box-title">Examiner Details</h3>
			
            </div>
            <!-- /.box-header -->
			 
            <div class="box-body">
				
				<form id="myForm" method="POST" action="db_function.php" >
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Examiner Name</th>
                  <th>Collge Name</th>
                  <th>Email</th>
                  <th>Phone NO.</th>
                  <th>Time to Login</th>
                  <th>Delete</th>
           
                </tr>
                </thead>
                <tbody>					
					<?php
					
						$teacher=$obj->getAll('SELECT a.*,b.* FROM log_time a,reg_examiner b where a.loguser_id=b.examiner_id ');
						foreach($teacher as $value)
						{
							//href='#db_function.php?d_teacher=$reg_id' <input name='id' type='hidden' value='$reg_id'>
							extract($value);
							echo "<tr>
							  <td>$name</td>
							  <td>$college_name</td>
							  <td>$email</td>
							  <td>$phno</td>
							  <td>$time</td>
							  <td>
							  
							  	<a class='delete' href='db_function.php?d_history=$loguser_id'>
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
				</form>
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
$obj->sweetalert('success',' Successfully Deleted','login_history.php');}


if(isset($_GET["OK"])){
$obj->sweetalert('success','you have successfully Updated Profile','user.php');}


if(isset($_GET["pay?"])){
$obj->sweetalert('error','The given Teacher Access is Blocked','login_history.php');}


if(isset($_GET["cancel"])){
$obj->sweetalert('success','you have successfully cancelled booking','user.php');}
?>


<?php
	include 'footer.php';
?>
