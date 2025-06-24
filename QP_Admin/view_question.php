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
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Question Details
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
              <h3 class="box-title"><?php 
						$ex=$obj->getOne('SELECT subject_name FROM `subject` WHERE sub_id='.$_GET['subid']);
						extract($ex);echo $subject_name; ?></h3>
				
            </div>

            <!-- /.box-header -->
            <div class="box-body">
				  
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Question </th>
                  <th>Question Complexity</th>
				  <th>Question Type</th>
                  <th>Module</th>
                  <!--<th>Delete</th>-->
                </tr>
                </thead>
				  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha256-jfr3oM7h2TWPi2Q0O0vPuRh+pc0eSfWfpZ2nHXt8tFQ=" crossorigin="anonymous"></script>
                <tbody>					
					<?php 
						$exam=$obj->getAll('SELECT * FROM `question` WHERE sub_id='.$_GET['subid']);
						foreach($exam as $value)
						{
							extract($value);
							echo "<tr>
							  <td>$question</td>
							  <td>$question_complex</td>
							  <td>$question_type Marks</td>
							  <td>$module Module</td>  
							
							  	  
							</tr>";			
						}
					?>
                </tbody>
				  <script>
				  	$("#block").change(function () {
    var value = $(this).val();
    $.ajax({
        type: "POST",
        url: "db_function.php",
        async: true,
        data: {
            action1: value // as you are getting in php $_POST['action1'] 
			alert('Success');
        },
        success: function (msg) {
            alert('Success');
            if (msg != 'success') {
                alert('Fail');
            }
        }
    });
});
				  </script>
                <!--<tfoot>
                <tr>
                  <th>Examiner Name</th>
                  <th>College Name</th>
                  <th>Email id</th>
                  <th>Phone NO.</th>
                  <th>Delete</th>
                </tr>
  <td>
							         <a class='delete'  href='db_function.php?d_que=$q_id' >
									<button type='button' class='btn btn-danger'>Delete</button>
									</a>
							  </td>
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
<?php
	/*if(isset($_GET['success']))
	{
		$obj->alert('Item Deleted','success');
		header('location:remove_examiner.php');
	}*/	
?>

<?php if(isset($_GET["success?"])){
$obj->sweetalert('success',' Successfully Unblocked','remove-teacher.php');}


if(isset($_GET["OK"])){
$obj->sweetalert('success','you have successfully Deleted Profile','remove-teacher.php');}


if(isset($_GET["pay?"])){
$obj->sweetalert('error','The given Teacher Access is Blocked','remove-teacher.php');}


if(isset($_GET["cancel"])){
$obj->sweetalert('error','you have successfully cancelled booking','remove-teacher.php');}
?>
<?php
	include 'footer.php';
?>
